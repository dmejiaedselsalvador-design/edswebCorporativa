@extends('layouts.app')
@section('title', 'EDS | Solutions')
@section('content')

<!-- HERO -->
<section class="relative overflow-hidden bg-primary py-20 lg:py-28">

    <div class="absolute inset-0">
        <img
            src="{{ asset('img/quality/quality4.jpg') }}"
            class="w-full h-full object-cover object-center scale-110 brightness-75"
        />

        <div class="absolute inset-0 bg-gradient-to-r from-[#0b2b4b]/90 via-[#0b2b4b]/60 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <h1 class="text-4xl md:text-6xl font-black text-white">
            Integrated <span class="text-blue-300">Solutions</span>
        </h1>

        <p class="mt-6 text-lg text-blue-100 max-w-xl">
            From automotive harnesses to complex cable assemblies,
            EDS delivers high-performance electrical solutions across industries.
        </p>
    </div>
</section>

<!-- GRID SOLUTIONS -->
<section class="py-20 px-6 max-w-7xl mx-auto">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- ITEM -->
        @php
        $solutions = [
            ['img'=>'AutomotiveWireHArness.png','title'=>'Automotive Wire Harness'],
            ['img'=>'BusWireHArness.png','title'=>'Bus Wire Harness'],
            ['img'=>'ApplianceWireHArness.png','title'=>'Appliance Wire Harness'],
            ['img'=>'CommercialApplianceWireHarness.png','title'=>'Commercial Appliance Harness'],
            ['img'=>'CableAssemblies.png','title'=>'Cable Assemblies'],
            ['img'=>'BatteryCables.png','title'=>'Battery Cables']
        ];
        @endphp

        @foreach($solutions as $item)
        <div class="group relative rounded-xl overflow-hidden shadow-xl">

            <!-- IMAGE -->
            <img
                src="{{ asset('img/solutions/'.$item['img']) }}"
                class="w-full h-[260px] object-cover group-hover:scale-110 transition duration-500"
            />

            <!-- OVERLAY -->


            <!-- TITLE -->
            <div class="bg-white p-4">
                <h3 class="font-bold text-primary">
                    {{ $item['title'] }}
                </h3>
            </div>

        </div>
        @endforeach

    </div>

</section>

<!-- FEATURE SECTION (MEJORA PRO) -->
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <h2 class="text-3xl font-black text-primary mb-6">
                Custom Electrical Solutions
            </h2>

            <p class="text-slate-600 text-lg leading-relaxed">
                Our engineering and manufacturing teams collaborate to deliver
                scalable, high-quality solutions tailored to each customer’s
                requirements — from low-volume prototypes to high-volume production.
            </p>

            <ul class="mt-6 space-y-3 text-slate-600">
                <li>• Automotive & industrial harnesses</li>
                <li>• Battery cable assemblies</li>
                <li>• Custom overmolding solutions</li>
                <li>• High-reliability electrical systems</li>
            </ul>
        </div>

        <div>
            <img
                src="{{ asset('img/quality/quality2.jpg') }}"
                class="rounded-xl shadow-2xl w-full h-[350px] object-cover"
            />
        </div>

    </div>
</section>

<!-- CTA -->
<section class="text-center py-20">

    <h3 class="text-3xl font-black text-primary">
        Looking for a custom solution?
    </h3>

    <p class="text-slate-600 mt-4">
        Contact our engineering team to discuss your project requirements.
    </p>

    <div class="mt-6 flex justify-center gap-4">

        <a href="{{ url('/contact') }}"
           class="bg-primary text-white px-8 py-3 rounded-lg font-bold hover:bg-primary/90">
            Contact an Engineer
        </a>

        <a href="mailto:sales@edsmanufacturing.com"
           class="text-primary font-bold flex items-center gap-2">
            <span class="material-symbols-outlined">mail</span>
            sales@edsmanufacturing.com
        </a>

    </div>

</section>

@endsection
