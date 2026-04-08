@extends('layouts.app')
@section('title', 'EDS | ' . $category)

@section('content')

<section class="py-20 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="mb-12">


            <!-- TITLE -->
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white">
                {{ $category }}
            </h1>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">

            @foreach ($items as $item)
                <div
                    onclick="openModal(this.querySelector('img').src)"
                    class="group relative rounded-2xl overflow-hidden cursor-zoom-in shadow-md hover:shadow-2xl transition duration-500"
                >
                    <img
                        src="{{ asset($item['img']) }}"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-700"
                    />

                    <!-- overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                    <!-- content -->
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-xl font-bold">{{ $item['name'] }}</h3>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>

<!-- MODAL ZOOM -->
<div id="imageModal"
     onclick="closeModal()"
     class="fixed inset-0 bg-black/90 flex items-center justify-center hidden z-50">

    <img id="modalImg"
         onclick="event.stopPropagation()"
         class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl transition duration-300 scale-95">

    <!-- CLOSE -->
    <button onclick="closeModal()"
            class="absolute top-6 right-6 text-white text-3xl hover:scale-110 transition">
        ✕
    </button>
</div>
<script>
function openModal(src) {
    const modal = document.getElementById('imageModal');
    const img = document.getElementById('modalImg');

    img.src = src;
    modal.classList.remove('hidden');

    // pequeña animación
    setTimeout(() => {
        img.classList.remove('scale-95');
        img.classList.add('scale-100');
    }, 50);
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    const img = document.getElementById('modalImg');

    img.classList.remove('scale-100');
    img.classList.add('scale-95');

    setTimeout(() => {
        modal.classList.add('hidden');
    }, 200);
}
</script>
@endsection




