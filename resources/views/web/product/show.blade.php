@extends('layouts.app')
@section('title', 'EDS | ' . $product->name)

@section('content')

<script src="//unpkg.com/alpinejs" defer></script>

<section class="py-12 bg-gray-50 min-h-screen" x-data="{
    mainImage: '{{ $product->images->firstWhere('is_main', 1) ? asset('storage/'.$product->images->firstWhere('is_main', 1)->image) : ($product->images->first() ? asset('storage/'.$product->images->first()->image) : asset('img/default.png')) }}'
}">
    <div class="max-w-[1200px] mx-auto px-6">

        <nav class="flex text-sm text-gray-400 mb-8" aria-label="Breadcrumb">

           <a href="{{ route('product.list') }}" class="hover:text-blue-900 transition text-sm">
    <i class="fa-solid fa-arrow-left mr-2"></i>Inventory
</a>
            <span class="mx-2">/</span>
            <span class="text-gray-600 font-medium">{{ $product->name }}</span>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

           <div class="space-y-4">
    <div class="w-full h-[500px] bg-white rounded-2xl border border-gray-100 flex items-center justify-center overflow-hidden p-4 shadow-inner group cursor-zoom-in relative">

        <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity bg-blue-900/10 text-blue-900 px-2 py-1 rounded text-[10px] font-bold uppercase tracking-widest z-10">
            Hover to zoom
        </div>

        <img :src="mainImage"
             alt="{{ $product->name }}"
             class="max-w-full max-h-full object-contain transition-transform duration-700 ease-out group-hover:scale-150"
             style="image-rendering: -webkit-optimize-contrast; object-position: center;">
    </div>

    <div class="flex gap-3 overflow-x-auto pb-2 custom-scrollbar">
        @foreach($product->images as $image)
        <div class="relative flex-shrink-0">
            <img src="{{ asset('storage/' . $image->image) }}"
                 @click="mainImage = '{{ asset('storage/' . $image->image) }}'"
                 :class="mainImage === '{{ asset('storage/' . $image->image) }}' ? 'border-blue-600 ring-2 ring-blue-100' : 'border-transparent'"
                 class="w-24 h-24 object-cover rounded-xl cursor-pointer border-2 hover:border-blue-400 transition-all shadow-sm">
        </div>
        @endforeach
    </div>
</div>

            <div class="flex flex-col">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 h-full flex flex-col justify-between">

                    <div>
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-blue-50 text-blue-700 text-xs font-bold px-3 py-1 rounded-lg uppercase tracking-wider">
                                {{ $product->category->name ?? 'Uncategorized' }}
                            </span>
                            <span class="text-gray-400 text-sm font-mono">SKU: {{ $product->codigo ?? 'N/A' }}</span>
                        </div>

                        <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                            {{ $product->name }}
                        </h1>

                        <div class="flex items-baseline gap-2 mb-6">
                            <span class="text-4xl font-black text-blue-900">${{ number_format($product->price, 2) }}</span>
                            <span class="text-gray-400 text-sm italic">Per unit / plus shipping</span>
                        </div>

                        <div class="mb-8">
                            @if(number_format($product->stock, 0) > 0)
                                <div class="inline-flex items-center bg-green-50 text-green-700 px-4 py-2 rounded-xl border border-green-100">
                                    <span class="relative flex h-3 w-3 mr-3">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                    </span>
                                    <span class="text-sm font-bold">In Stock: {{ number_format($product->stock, 0) }} units available</span>
                                </div>
                            @else
                                <div class="inline-flex items-center bg-red-50 text-red-700 px-4 py-2 rounded-xl border border-red-100">
                                    <span class="h-3 w-3 rounded-full bg-red-500 mr-3"></span>
                                    <span class="text-sm font-bold">Currently Out of Stock</span>
                                </div>
                            @endif
                        </div>

                        <div class="prose prose-blue text-gray-600 mb-8">
                            <h4 class="text-gray-900 font-bold mb-2 uppercase text-xs tracking-widest">Description</h4>
                            <p class="leading-relaxed">
                                {{ $product->description }}
                            </p>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-10">
                            <div class="bg-gray-50 p-4 rounded-xl">
                                <p class="text-[10px] text-gray-400 uppercase font-black">Quality Grade</p>
                                <p class="text-sm font-bold text-gray-700 italic">Industrial / OEM</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-xl">
                                <p class="text-[10px] text-gray-400 uppercase font-black">Shipping</p>
                                <p class="text-sm font-bold text-gray-700 italic">Immediate / Global</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
   @if($product->ebay_url)
    <a href="{{ $product->ebay_url }}" target="_blank"
       class="group w-full inline-flex items-center justify-center px-4 py-4 border-2 border-gray-300 bg-white text-gray-700 text-sm font-black rounded-xl hover:bg-gray-50 hover:border-gray-400 transition-all gap-3 shadow-sm">
        
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/EBay_logo.svg" 
             class="h-4 opacity-90 group-hover:opacity-100 transition-opacity" 
             alt="eBay">
             
        <span>Buy this item on eBay</span>
    </a>
@endif
                        <a href="{{ route('web.contact', ['ref' => $product->codigo]) }}"
                           class="group relative flex w-full items-center justify-center bg-blue-900 text-white py-4 px-6 rounded-xl font-bold text-lg hover:bg-blue-800 transition-all shadow-lg hover:shadow-blue-200">
                            <span>Request Quote / Inquiry</span>
                            <svg class="ml-3 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>

                        <a href="{{ url()->previous() }}"
                           class="flex w-full items-center justify-center border-2 border-gray-200 py-3 rounded-xl text-gray-500 font-bold hover:bg-gray-50 hover:border-gray-300 transition-all">
                            <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Back to Inventory
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .custom-scrollbar::-webkit-scrollbar { height: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
</style>

@endsection
