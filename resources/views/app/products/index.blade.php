@extends('layouts.dashboard')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

    <div class="md:flex md:items-center md:justify-between mb-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Gestión de Productos
            </h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4 space-x-3">
            <a href="{{ route('products.create') }}"
               class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-0h6m-6-0H6"/>
                </svg>
                Agregar Producto
            </a>
        </div>
    </div>

    <div class="bg-white p-4 rounded-t-lg border-b border-gray-200 flex flex-col md:flex-row md:items-center justify-between space-y-3 md:space-y-0">
        <form action="{{ route('products.index') }}" method="GET" class="relative w-full md:w-96">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </span>
            <input type="text" name="search" value="{{ request('search') }}"
                   class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                   placeholder="Buscar por Part Number o Descripción...">
        </form>

        <div class="text-sm text-gray-600">
            Mostrando <span class="font-semibold">{{ $products->count() }}</span> productos
        </div>
    </div>

    <div class="overflow-x-auto bg-white shadow-xl rounded-b-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Part Number</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Part Description</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Available QTY</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($products as $product)
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-900">{{ $product->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ Str::limit($product->description, 40) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">${{ number_format($product->price, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="{{ $product->stock < 10 ? 'text-red-600 font-bold' : 'text-gray-600' }}">
                            {{ number_format($product->stock, 0) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                            {{ $product->category->name ?? 'N/A' }}
                        </span>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox"
                                   class="sr-only peer toggle-status-btn"
                                   data-id="{{ $product->id }}"
                                   {{ $product->is_active ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-3">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:text-blue-900 transition" title="Editar">
                            <svg class="h-5 w-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-10 text-center text-gray-500 italic">
                        No se encontraron productos coincidentes.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $products->appends(['search' => request('search')])->links() }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // 1. Configuración global de Toasts (Notificaciones pequeñas)
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    // 2. Lógica para el Switch de Activo/Inactivo (Toggle)
    document.querySelectorAll('.toggle-status-btn').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const productId = this.dataset.id;
            const isCheckedNow = this.checked; // Estado visual del switch
            const row = this.closest('tr');
            const labelText = this.closest('label').querySelector('.status-label');

            // Efecto visual inmediato (Feedback táctil)
            row.style.transition = 'all 0.3s ease';

            fetch(`/eds-dashboard/products/${productId}/toggle-status`, {
                method: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) throw new Error('Error en el servidor');
                return response.json();
            })
            .then(data => {
                if(data.success) {
                    // Sincronizar fila con el estado real de la BD
                    row.style.opacity = data.is_active ? '1' : '0.5';
                    row.style.filter = data.is_active ? 'none' : 'grayscale(0.6)';

                    // Actualizar el texto del label
                    if (labelText) {
                        labelText.textContent = data.is_active ? 'Activo' : 'Inactivo';
                        labelText.classList.toggle('text-blue-600', data.is_active);
                        labelText.classList.toggle('text-gray-400', !data.is_active);
                    }

                    // Notificación Toast con color dinámico
                    Toast.fire({
                        icon: 'success',
                        iconColor: data.is_active ? '#10b981' : '#6b7280',
                        title: data.message
                    });
                }
            })
            .catch(error => {
                // REVERTIR el switch si la petición falla
                this.checked = !isCheckedNow;

                Toast.fire({
                    icon: 'error',
                    title: 'No se pudo actualizar el estado en el servidor'
                });
            });
        });
    });

    // 3. Lógica para Eliminar (Ventana de confirmación)
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;

            Swal.fire({
                title: '¿Desea eliminar este producto?',
                text: "Esta acción no se puede deshacer y afectará el inventario.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626', // Rojo
                cancelButtonColor: '#6b7280', // Gris
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Crear y enviar formulario dinámico para el DELETE
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `/products/${id}`;
                    form.innerHTML = `
                        @csrf
                        @method('DELETE')
                    `;
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        });
    });

    // 4. Capturar mensajes de éxito de Laravel (Redirecciones)
    @if(session('success'))
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    @endif

    // 5. Capturar errores de validación o sistema
    @if(session('error'))
        Toast.fire({
            icon: 'error',
            title: '{{ session('error') }}'
        });
    @endif
</script>
@endsection
