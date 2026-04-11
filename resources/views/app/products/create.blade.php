@extends('layouts.dashboard')
@section('content')

<div class="max-w-2xl mx-auto py-12">
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
          class="space-y-6 bg-white p-8 rounded-xl shadow-lg">
        @csrf

        <!-- Nombre -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">part Number
</label>
            <input type="text" name="name" required
                   class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"/>
        </div>

        <!-- Descripción -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Part Description</label>
            <textarea name="description"
                      class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"></textarea>
        </div>

        <!-- Precio y Stock -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium mb-1">Price Per Unit</label>
                <input type="number"  step="0.01" name="price" required
                       class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"/>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1">Stock</label>
                <input type="number"  step="1" name="stock" required
                       class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"/>
            </div>
        </div>

        <!-- Categoría -->
     <div>
            <label class="block text-gray-700 font-medium mb-1">Category</label>
            <select name="category_id" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1 flex items-center">
                <svg class="w-4 h-4 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 13.979h-3.414l-1.041-3.693h-8.086l-1.042 3.693h-3.417l4.583-14.979h4.834l4.583 14.979zm-7.618-4.945l-2.382-8.332-2.382 8.332h4.764z"/>
                </svg>
              eBay Link (Optional)
            </label>
            <input type="url" name="ebay_url" 
                   placeholder="https://www.ebay.com/itm/..."
                   class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 placeholder-gray-400"/>
            <p class="text-[10px] text-gray-500 mt-1 italic">Paste the full eBay item URL here if the product is listed.</p>
        </div>


   <!-- Imágenes -->
<div>
    <label class="block text-gray-700 font-medium mb-1">
       Product Images (Max 3)
    </label>

    <input type="file" name="images[]" id="imageInput" multiple accept="image/*"
           class="w-full border border-gray-300 px-4 py-2 rounded-lg"/>

    <div id="preview" class="flex flex-wrap gap-2 mt-4"></div>
</div>

        <button type="submit"
                class="w-full bg-blue-900 text-white font-semibold py-3 rounded-lg hover:bg-blue-800 transition">
          Save Product
        </button>
    </form>
</div>

<script>
const input = document.getElementById('imageInput');
const preview = document.getElementById('preview');

let selectedFiles = [];

// Cuando selecciona archivos
input.addEventListener('change', function(e) {
    const newFiles = Array.from(e.target.files);

    newFiles.forEach(file => {

        if (!file.type.startsWith('image/')) return;

        if (selectedFiles.length >= 3) {
            alert('Máximo 3 imágenes');
            return;
        }

        selectedFiles.push(file);
    });

    renderPreview();
    syncInput();
});

// Renderizar preview
function renderPreview() {
    preview.innerHTML = '';

    selectedFiles.forEach((file, index) => {

        const reader = new FileReader();

        reader.onload = function(e) {

            const container = document.createElement('div');
            container.className = 'relative';

            const img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'w-24 h-24 object-cover rounded border';

            const btn = document.createElement('button');
            btn.innerHTML = '✕';
            btn.type = 'button';
            btn.className = 'absolute top-0 right-0 bg-red-600 text-white rounded-full w-5 h-5 text-xs';

            btn.onclick = () => {
                selectedFiles.splice(index, 1);
                renderPreview();
                syncInput();
            };

            container.appendChild(img);
            container.appendChild(btn);
            preview.appendChild(container);
        };

        reader.readAsDataURL(file);
    });
}

// Sincronizar con input real (FORMA SEGURA)
function syncInput() {
    const dataTransfer = new DataTransfer();

    selectedFiles.forEach(file => {
        dataTransfer.items.add(file);
    });

    input.files = dataTransfer.files;
}
</script>

@endsection
