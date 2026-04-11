@extends('layouts.app')
@section('title', 'EDS | Special Inventory')

@section('content')

<section class="py-12 bg-gray-50 min-h-screen">
    <div class="max-w-[1300px] mx-auto px-6">

        {{-- HEADER & SEARCH --}}
        <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-2">
                    Components For Sale
                </h1>
                <div class="h-1 w-20 bg-blue-600 mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-xl text-base">
                    Available surplus inventory. Industrial-grade components ready for immediate use.
                </p>
            </div>

            {{-- SEARCH FORM: Envía la petición al servidor --}}
            <form action="{{ url()->current() }}" method="GET" class="relative w-full md:w-96">
                {{-- Mantener la categoría seleccionada al buscar --}}
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </span>
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search by part number or description..."
                    class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-xl leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition-all shadow-sm"
                >
                {{-- Botón para limpiar búsqueda --}}
                @if(request('search'))
                    <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}" class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-red-500">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif
            </form>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            {{-- SIDEBAR: CATEGORIES --}}
            <aside class="lg:col-span-1">
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm sticky top-6">
                    <h3 class="font-bold text-blue-900 text-lg mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                        Categories
                    </h3>

                    <nav class="space-y-1">
                        <a href="{{ request()->fullUrlWithQuery(['category' => 'All', 'page' => null]) }}"
                            class="block w-full text-left px-4 py-3 text-sm transition-all rounded-r-lg {{ request('category', 'All') === 'All' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600 border-l-4 border-transparent' }}">
                            Show All Components
                        </a>

                        @foreach($categories as $category)
                            <a href="{{ request()->fullUrlWithQuery(['category' => $category->name, 'page' => null]) }}"
                                class="block w-full text-left px-4 py-3 text-sm transition-all rounded-r-lg {{ request('category') === $category->name ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600 border-l-4 border-transparent' }}">
                                {{ $category->name }}
                                <span class="float-right text-xs bg-gray-100 text-gray-500 py-1 px-2 rounded-full">
                                    {{ $category->products_count ?? $category->products->where('is_active', true)->count() }}
                                </span>
                            </a>
                        @endforeach
                    </nav>
                </div>
            </aside>

            {{-- PRODUCTS GRID --}}
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
                    @forelse($products as $product)
                        @php
                            $mainImage = $product->images->firstWhere('is_main', 1) ?? $product->images->first();
                        @endphp

                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden flex flex-col hover:shadow-lg transition-all group h-full">
                            {{-- Image Container --}}
                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                <img src="{{ $mainImage && $mainImage->image ? asset('storage/'.$mainImage->image) : asset('img/default.png') }}"
                                     alt="{{ $product->name }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                                <div class="absolute top-2 right-2">
                                    <span class="bg-white/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-blue-900 shadow-sm border border-blue-100">
                                        ${{ number_format($product->price, 2) }}
                                    </span>
                                </div>
                            </div>

                            {{-- Info Container --}}
                            <div class="p-4 flex flex-col flex-1">
                                <h3 class="font-bold text-gray-900 text-sm line-clamp-2 mb-1 h-10 group-hover:text-blue-600 transition-colors leading-tight">
                                    {{ $product->name }}
                                </h3>

                                <p class="text-[11px] text-gray-500 line-clamp-2 mb-4 italic">
                                    {{ $product->description }}
                                </p>

                                {{-- Buttons --}}
                                <div class="mt-auto space-y-2">
                                    <a href="{{ route('products.show', $product->id) }}"
                                       class="w-full inline-flex items-center justify-center px-4 py-2 bg-blue-900 text-white text-xs font-bold rounded-lg hover:bg-blue-800 transition-colors shadow-sm">
                                        View Details
                                    </a>

                                    @if($product->ebay_url)
                                 <a href="{{ $product->ebay_url }}" target="_blank"
   class="group w-full inline-flex items-center justify-center px-4 py-2 border border-gray-300 bg-white text-gray-700 text-xs font-bold rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-all gap-2 shadow-sm">
    
    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/EBay_logo.svg" 
         class="h-3 opacity-90 group-hover:opacity-100 transition-opacity" 
         alt="eBay">
         
    <span>Buy on eBay</span>
</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full py-20 text-center bg-white rounded-2xl border border-dashed border-gray-300">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No components found</h3>
                            <p class="mt-1 text-sm text-gray-500">Try adjusting your search or category filters.</p>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="mt-12">
                    {{ $products->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection