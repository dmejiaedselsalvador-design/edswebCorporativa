<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index(Request $request)
    {
       $query = $request->input('search');

    $products = Product::with('category')
        ->when($query, function ($q) use ($query) {
            return $q->where('name', 'LIKE', "%{$query}%")
                     ->orWhere('description', 'LIKE', "%{$query}%");
        })
        ->orderBy('created_at', 'desc')
        ->paginate(15);
        return view('app.products.index', compact('products'));
    }
/// Filtrar productos por categoría
    public function filterByCategory(Request $request)
    {
        $categoryId = $request->input('category_id');
        $products = Product::with(['category', 'images'])
            ->when($categoryId, function ($query) use ($categoryId) {
                return $query->where('category_id', $categoryId);
            })
            ->get();

        $categories = Category::all();
        return view('app.products.index', compact('products','categories'));
    }

    //agregar vista publicar producto
public function IndexProduct(Request $request)
{
    // 1. Obtenemos las categorías para el sidebar
    $categories = Category::has('products')->get();

    // 2. Iniciamos la consulta de productos activos
    $query = Product::where('is_active', true)->with(['category', 'images']);

    // --- NUEVO: Filtro de Búsqueda Global ---
    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('description', 'LIKE', "%{$search}%");
            //  ->orWhere('part_number', 'LIKE', "%{$search}%"); // Ajusta según tus columnas
        });
    }

    // Filtro por categoría (Mantenemos tu lógica pero mejorada con filled)
    if ($request->filled('category') && $request->category !== 'All') {
        $query->whereHas('category', function($q) use ($request) {
            $q->where('name', $request->category);
        });
    }

    // Aumentamos un poco el número de productos  para que se vea mejor el grid
    $products = $query->latest()->paginate(12)->withQueryString();

    return view('web.product.producList', compact('categories', 'products'));
}

    public function create()
    {
        $categories = Category::all();
        return view('app.products.create', compact('categories'));
    }

public function store(Request $request)
{
    // 1. Validación robusta: limitamos formatos y tamaño
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'category_id' => 'nullable|exists:categories,id',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Solo imágenes reales
        'ebay_url' => 'nullable|url',
    ]);

    $product = Product::create([
        'name' => $data['name'],
        'description' => $data['description'] ?? null,
        'price' => $data['price'],
        'stock' => $data['stock'],
        'category_id' => $data['category_id'] ?? null,
        'ebay_url' => $data['ebay_url'] ?? null,
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $img) {
            if ($img->isValid()) {
                // 2. Generar nombre seguro (sin usar el nombre original del cliente)
                $name = time().'_'.$index.'.'.$img->getClientOriginalExtension();
                $destination = storage_path('app/public/products');

                if (!file_exists($destination)) {
                    mkdir($destination, 0777, true);

                    // 3. Escapar rutas para shell_exec (Previene Inyección de Comandos)
                    $safeDest = escapeshellarg($destination);
                    shell_exec("icacls $safeDest /inheritance:e /grant Everyone:(OI)(CI)R /T");
                }

                if ($img->move($destination, $name)) {
                    $filePath = $destination . DIRECTORY_SEPARATOR . $name;

                    // Escapar la ruta del archivo individual
                    $safeFilePath = escapeshellarg($filePath);
                    shell_exec("icacls $safeFilePath /grant Everyone:R");
                }

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'products/'.$name,
                    'is_main' => $index === 0,
                    'position' => $index
                ]);
            }
        }
    }

    return redirect()->route('products.index')->with('success','Producto creado correctamente!');
}


    public function show(Product $product)
    {
       // $product->load(['category', 'images']);
      //  return view('app.products.show', compact('product'));
      // Verificamos que el producto esté activo antes de mostrarlo
    if (!$product->is_active) {
        abort(404, 'Product not available');
    }

    // Cargamos las relaciones necesarias: imágenes y categoría
    $product->load(['images', 'category']);
    // Retornamos la vista (asegúrate de que la ruta del archivo sea correcta)
    return view('web.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $product->load('images');
        return view('app.products.edit', compact('product','categories'));
    }

  public function update(Request $request, Product $product)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'category_id' => 'nullable|exists:categories,id',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
  'ebay_url' => 'nullable|url',


    ]);

    $product->update($data);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $img) {
            if ($img->isValid()) {
                $name = time().'_update_'.$index.'.'.$img->getClientOriginalExtension();
                $destination = storage_path('app/public/products');

                // Aplicamos tu lógica de seguridad Windows
                if ($img->move($destination, $name)) {
                    $safeFilePath = escapeshellarg($destination . DIRECTORY_SEPARATOR . $name);
                    shell_exec("icacls $safeFilePath /grant Everyone:R");

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => 'products/'.$name,
                        'is_main' => false,
                        'position' => $product->images()->count() + 1
                    ]);
                }
            }
        }
    }

    return redirect()->route('products.index')->with('success', 'Producto actualizado con éxito');
}

public function destroy(Product $product)
{
    foreach ($product->images as $img) {

        $path = public_path('storage/' . $img->image);

        if (is_file($path)) {
            unlink($path);
        }
    }

    // eliminar registros de imágenes
    $product->images()->delete();

    $product->delete();

    return redirect()->route('products.index')
        ->with('success','Producto eliminado correctamente!');
}

public function toggleStatus(Product $product)
{
    try {
        // Esto cambia 1 a 0, o 0 a 1 automáticamente
        $product->is_active = !$product->is_active;
        $product->save();

        // Retornamos JSON para que el JavaScript reciba el nuevo estado
        return response()->json([
            'success' => true,
            'is_active' => $product->is_active,
            'message' => $product->is_active ? 'Producto activado' : 'Producto desactivado'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error al actualizar la base de datos'
        ], 500);
    }
}
}
