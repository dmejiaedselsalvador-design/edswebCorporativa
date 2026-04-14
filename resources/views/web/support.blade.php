@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen pb-20 text-gray-900 font-sans">

    <div class="relative pt-32 pb-48 overflow-hidden bg-[#0a192f]">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-400 blur-[120px] rounded-full"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-cyan-400 blur-[120px] rounded-full"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-300 text-xs font-bold uppercase tracking-[0.2em] mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-400"></span>
                    </span>
                    Operational Support
                </div>

                <h1 class="text-6xl md:text-8xl font-black mb-8 italic tracking-tighter text-white leading-none">
                    SUPPORT <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">CENTER.</span>
                </h1>

                <p class="text-blue-100/70 text-xl md:text-2xl font-light max-w-2xl leading-relaxed border-l-2 border-blue-500/30 pl-6">
                    Global Sales, Engineering, and Corporate Resources for
                    <span class="text-white font-semibold">EDS Manufacturing</span> strategic partners worldwide.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 -mt-24 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="space-y-6">
                <div class="bg-white rounded-[2.5rem] border border-gray-100 p-8 shadow-2xl">
                    <h3 class="font-bold text-blue-600 text-xs uppercase tracking-widest mb-6 flex items-center gap-2">
                        <span class="w-8 h-[1px] bg-blue-200"></span>
                        Global Headquarters
                    </h3>
                    <div class="space-y-6">
                        <div>
                            <p class="text-gray-950 font-bold text-2xl mb-2 tracking-tight">Nogales Office</p>
                            <p class="text-gray-500 text-sm leading-relaxed font-medium">
                                765 N. Target Range Rd.,<br />
                                Nogales, AZ 85621, USA
                            </p>
                        </div>

                    </div>
                </div>

                <a href="{{ route('terms') }}" class="flex items-center justify-between p-6 rounded-2xl bg-white border border-gray-100 hover:border-blue-300 hover:bg-blue-50 transition-all group shadow-xl">
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-100 p-3 rounded-xl text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-0.5">Downloads</p>
                            <p class="text-sm font-bold text-gray-900">Terms & Conditions</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white rounded-[2.5rem] border border-gray-100 p-8 shadow-2xl">
                    <div class="mb-8 border-b border-gray-100 pb-6">
                        <h2 class="text-2xl font-black italic tracking-tighter text-gray-950 uppercase">Sales & Engineering Support</h2>
                        <p class="text-blue-700 text-xs font-bold uppercase tracking-widest mt-1">U.S. National Coverage</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                        @php
                            $locations = [
                                ['label' => 'Nogales, AZ / Tucson, AZ', 'query' => '765 N. Target Range Rd., Nogales, AZ 85621', 'color' => 'bg-[#76c067]'],
                                ['label' => 'Las Vegas, NV', 'query' => 'Las Vegas, NV', 'color' => 'bg-[#438a8a]'],
                                ['label' => 'Chicago, IL', 'query' => 'Chicago, IL', 'color' => 'bg-[#8ba4c7]'],
                                ['label' => 'Fort Wayne, IN', 'query' => 'Fort Wayne, IN', 'color' => 'bg-[#d2edc4]'],
                                ['label' => 'Marion, OH', 'query' => 'Marion, OH', 'color' => 'bg-[#a6cfe3]'],
                                ['label' => 'Detroit, MI', 'query' => 'Detroit, MI', 'color' => 'bg-[#76c067]'],
                            ];
                        @endphp

                        @foreach($locations as $index => $loc)
                        <button
                            type="button"
                            onclick="updateMap('{{ $loc['query'] }}', this)"
                            class="location-btn text-left bg-gray-50 border border-gray-100 p-5 rounded-2xl transition-all duration-300 group {{ $index === 0 ? 'ring-2 ring-blue-500 bg-blue-50 shadow-lg scale-[1.02]' : 'hover:bg-gray-100' }}">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full {{ $loc['color'] }} shadow-sm"></div>
                                <span class="text-gray-950 font-bold text-sm tracking-tight group-hover:text-blue-800">
                                    {{ $loc['label'] }}
                                </span>
                            </div>
                        </button>
                        @endforeach
                    </div>

                    <div class="rounded-[2rem] overflow-hidden border border-gray-100 h-[450px] relative shadow-inner bg-gray-100">
                        <iframe
                            id="dynamic-map"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            src="https://maps.google.com/maps?q={{ urlencode($locations[0]['query']) }}&t=&z=13&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function updateMap(query, element) {
        const mapIframe = document.getElementById('dynamic-map');

        // 1. Actualizar el mapa
        const newUrl = "https://maps.google.com/maps?q=" + encodeURIComponent(query) + "&t=&z=13&ie=UTF8&iwloc=&output=embed";
        mapIframe.src = newUrl;

        // 2. Manejo de estados visuales de los botones (Tarjetas)
        document.querySelectorAll('.location-btn').forEach(btn => {
            // Resetear todos los botones a su estado normal
            btn.classList.remove('ring-2', 'ring-blue-500', 'bg-blue-50', 'shadow-lg', 'scale-[1.02]');
            btn.classList.add('bg-gray-50', 'hover:bg-gray-100');
        });

        // Aplicar estado "Activo" al botón presionado
        element.classList.add('ring-2', 'ring-blue-500', 'bg-blue-50', 'shadow-lg', 'scale-[1.02]');
        element.classList.remove('bg-gray-50', 'hover:bg-gray-100');
    }
</script>
@endsection
