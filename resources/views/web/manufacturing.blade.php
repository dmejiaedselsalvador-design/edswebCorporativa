@extends('layouts.app') @section('title', 'EDS | Manufacturing')
@section('content')

<div class="w-full max-w-screen-7xl mx-auto px-6 lg:px-8">
    <!-- HERO -->
    <section class="relative overflow-hidden bg-primary py-20 lg:py-32">
        <div class="absolute inset-0">
            <img
                src="{{
                    asset('img/machine_wire_automatice/wire_automatice_10.jpeg')
                }}"
                class="w-full h-full object-cover object-center scale-110 brightness-75 contrast-110"
            />

            <!-- OVERLAY -->
            <div
                class="absolute inset-0 bg-gradient-to-r from-[#0b2b4b]/85 via-[#0b2b4b]/60 to-transparent"
            ></div>

            <!-- LIGHT EFFECT -->
            <div class="absolute inset-0">
                <div
                    class="absolute top-20 right-20 w-[500px] h-[500px] bg-blue-400/20 blur-[120px] rounded-full"
                ></div>
                <div
                    class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-cyan-300/10 blur-[120px] rounded-full"
                ></div>
            </div>

            <!-- GRID -->
            <div
                class="absolute inset-0 opacity-[0.04]"
                style="
                    background-image:
                        linear-gradient(to right, white 1px, transparent 1px),
                        linear-gradient(to bottom, white 1px, transparent 1px);
                    background-size: 40px 40px;
                "
            ></div>
        </div>

        <!-- CONTENT -->
        <div
            class="container mx-auto max-w-[1280px] px-6 lg:px-10 relative z-10"
        >
            <div class="max-w-[800px]">
                <span
                    class="inline-block bg-white/10 px-4 py-1 text-sm text-white rounded-full mb-6 backdrop-blur"
                >
                    Since 1990
                </span>

                <h1
                    class="text-4xl md:text-6xl font-black text-white leading-tight"
                >
                    Advanced Manufacturing <br />
                    <span class="text-blue-300">& Automation</span>
                </h1>

                <p class="mt-6 text-lg text-blue-100 max-w-xl">
                    Leveraging high-performance
                    <span class="font-bold text-white">Artos</span> and
                    <span class="font-bold text-white">Komax</span>
                    automation systems to deliver precision, efficiency, and
                    scalability.
                </p>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <div class="grid md:grid-cols-3 gap-6 py-16">
        <div class="p-8 bg-white border rounded-xl shadow-sm">
            <span class="material-symbols-outlined text-primary text-4xl"
                >precision_manufacturing</span
            >
            <p class="text-sm text-slate-500 uppercase mt-2">Annual Capacity</p>
            <p class="text-4xl font-black text-primary">50M+</p>
        </div>

        <div class="p-8 bg-white border rounded-xl shadow-sm">
            <span class="material-symbols-outlined text-primary text-4xl"
                >settings_input_component</span
            >
            <p class="text-sm text-slate-500 uppercase mt-2">Precision</p>
            <p class="text-4xl font-black text-primary">0.001mm</p>
        </div>

        <div class="p-8 bg-white border rounded-xl shadow-sm">
            <span class="material-symbols-outlined text-primary text-4xl"
                >smart_toy</span
            >
            <p class="text-sm text-slate-500 uppercase mt-2">Automation</p>
            <p class="text-4xl font-black text-primary">95%</p>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="space-y-24 pb-10">
        <!-- WIRE PROCESSING -->
        <section class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-3xl font-black text-primary">
                    Wire Processing Excellence
                </h2>

                <p class="text-slate-600 text-lg">
                    Our facility features advanced
                    <strong>Artos and Komax</strong>
                    automated systems delivering unmatched precision in cutting,
                    stripping, and crimping.
                </p>

                <ul class="space-y-3 text-sm">
                    <li class="flex gap-2">
                        <span class="text-green-600">✔</span> Automated crimp
                        monitoring
                    </li>
                    <li class="flex gap-2">
                        <span class="text-green-600">✔</span> Wire marking &
                        coding
                    </li>
                    <li class="flex gap-2">
                        <span class="text-green-600">✔</span> Multi-stage
                        validation
                    </li>
                </ul>
            </div>

            <img
                src="{{
                    asset(
                        'img/machine_wire_automatice/Regenerada_MachineWire01.png'
                    )
                }}"
                class="rounded-xl shadow-xl h-[400px] object-cover w-full"
            />
        </section>

        <!-- INJECTION -->
        <section class="grid md:grid-cols-2 gap-12 items-center">
            <img
                src="{{ asset('img/home/moldeadoraMag_processed.png') }}"
                class="rounded-xl shadow-xl h-[400px] w-full object-contain bg-white"
            />

            <div class="space-y-6">
                <h2 class="text-3xl font-black text-primary">
                    Injection Molding
                </h2>

                <p class="text-slate-600 text-lg">
                    High-volume precision molding with tight tolerances and
                    scientific process control.
                </p>

                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 bg-primary/5 rounded-lg">
                        <p class="font-bold text-primary">15–500 Tons</p>
                        <p class="text-xs text-slate-500">Clamping Force</p>
                    </div>

                    <div class="p-4 bg-primary/5 rounded-lg">
                        <p class="font-bold text-primary">24/7</p>
                        <p class="text-xs text-slate-500">Production</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center space-y-6 py-20 border-t">
            <h3 class="text-2xl font-bold">Ready to scale your production?</h3>

            <p class="text-slate-600 max-w-xl mx-auto">
                Our engineering and manufacturing teams are ready to optimize
                your supply chain and deliver high-performance solutions.
            </p>

            <!-- BOTONES -->
            <div
                class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-6"
            >
                <!-- CTA PRINCIPAL -->
                <a
                    href="/contact"
                    class="bg-primary text-white px-8 py-3 rounded-lg font-bold hover:bg-primary/90 transition-all shadow-lg hover:scale-105"
                >
                    Request a Consultation
                </a>

                <!-- CTA SECUNDARIO -->
                <a
                    href="mailto:sales@edsmanufacturing.com"
                    class="flex items-center gap-2 text-primary font-semibold hover:underline"
                >
                    <span class="material-symbols-outlined">mail</span>
                    sales@edsmanufacturing.com
                </a>
            </div>
        </section>
    </div>
</div>

@endsection
