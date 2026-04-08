@extends('layouts.app')
@section('title', 'EDS | Special Inventory')

@section('content')

<script src="//unpkg.com/alpinejs" defer></script>

<section class="py-12 bg-gray-50 min-h-screen">
    <div x-data="{ selectedCategory: 'All' }" class="max-w-[1300px] mx-auto px-6">

        <div class="mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-2">
                Components For Sale
            </h1>
            <div class="h-1 w-20 bg-blue-600 mb-4 rounded-full"></div>
            <p class="text-gray-600 max-w-2xl text-lg">
                Available surplus inventory ready for immediate use. Industrial-grade components for automotive,
                cable, and appliance applications.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <aside class="lg:col-span-1">
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm sticky top-6">
                    <h3 class="font-bold text-blue-900 text-lg mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                        Categories
                    </h3>

                    <nav class="space-y-1">
                        <button @click="selectedCategory = 'All'"
                            :class="selectedCategory === 'All' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600 border-l-4 border-transparent'"
                            class="w-full text-left px-4 py-3 text-sm transition-all rounded-r-lg">
                            Show All Components
                        </button>

                        @foreach($categories as $category)
                            <button @click="selectedCategory = '{{ $category->name }}'"
                                :class="selectedCategory === '{{ $category->name }}' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600 border-l-4 border-transparent'"
                                class="w-full text-left px-4 py-3 text-sm transition-all rounded-r-lg">
                                {{ $category->name }}
                                <span class="float-right text-xs bg-gray-100 text-gray-500 py-1 px-2 rounded-full">
                                    {{ $category->products_count ?? $category->products->where('is_active', true)->count() }}
                                </span>
                            </button>
                        @endforeach
                    </nav>

                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <h3 class="font-semibold text-blue-900 mb-4 text-sm uppercase tracking-wider">Inventory Status</h3>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-600">
                                <span class="w-3 h-3 bg-green-500 rounded-full mr-3"></span>
                                In Stock / Ready to Ship
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <span class="w-3 h-3 bg-yellow-400 rounded-full mr-3"></span>
                                Limited Quantity
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="lg:col-span-3">

                <div class="bg-white border rounded-xl p-4 mb-6 flex flex-col sm:flex-row justify-between items-center shadow-sm">
                    <p class="text-sm text-gray-500 mb-3 sm:mb-0">
                        Category: <span class="font-bold text-blue-800" x-text="selectedCategory"></span>
                    </p>

                    <div class="flex items-center space-x-4">
                        <label class="text-xs text-gray-400 uppercase font-bold">Sort By:</label>
                        <select class="border-gray-200 rounded-lg px-4 py-2 text-sm focus:ring-blue-500 focus:border-blue-500 outline-none">
                            <option>Latest Arrivals</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-4">
                    @forelse($products as $product)
                        @php
                            $mainImage = $product->images->firstWhere('is_main', 1) ?? $product->images->first();
                        @endphp

                        <div x-show="selectedCategory === 'All' || selectedCategory === '{{ $product->category->name }}'"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             class="bg-white border border-gray-200 rounded-2xl p-5 flex flex-col md:flex-row gap-6 hover:shadow-xl hover:border-blue-200 transition-all group">

                            <div class="w-full md:w-44 h-44 flex-shrink-0 relative overflow-hidden rounded-xl bg-gray-100">
                                <img src="{{ $mainImage && $mainImage->image ? asset('storage/'.$mainImage->image) : asset('img/default.png') }}"
                                     alt="{{ $product->name }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                @if($product->stock < 5 && $product->stock > 0)
                                    <span class="absolute top-2 left-2 bg-orange-500 text-white text-[10px] font-bold px-2 py-1 rounded-md uppercase">
                                        Low Stock
                                    </span>
                                @endif
                            </div>

                            <div class="flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-700 transition-colors">
                                            {{ $product->name }}
                                        </h3>
                                        <span class="text-2xl font-black text-blue-900">
                                            ${{ number_format($product->price, 2) }}
                                        </span>
                                    </div>

                                    <p class="text-sm text-gray-500 mt-2 line-clamp-2 italic">
                                        {{ $product->description }}
                                    </p>

                                    <div class="mt-4 flex flex-wrap gap-3">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            {{ $product->category->name }}
                                        </span>
                                        @if($product->stock > 0)
                                            <span class="inline-flex items-center text-xs font-bold text-green-600">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                                {{ number_format($product->stock, 0) }} Units Available
                                            </span>
                                        @else
                                            <span class="inline-flex items-center text-xs font-bold text-red-500">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                                                Out of Stock
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="mt-6 flex items-center justify-end">
                                    <a href="{{ route('products.show', $product->id) }}"
                                       class="inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-xl text-white bg-blue-900 hover:bg-blue-800 shadow-md hover:shadow-lg transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        View Specifications
                                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white border rounded-2xl p-12 text-center shadow-sm">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No items found</h3>
                            <p class="mt-1 text-sm text-gray-500">Try selecting a different category or check back later.</p>
                        </div>
                    @endforelse

                    <div class="mt-12 py-4 border-t border-gray-100">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
