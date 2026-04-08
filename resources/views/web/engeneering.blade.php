@extends('layouts.app') @section('title', 'EDS | Engineering')
@section('content')

<!-- HERO -->
<section class="relative overflow-hidden bg-primary py-20 lg:py-32">
    <div class="absolute inset-0">
        <img
            src="{{ asset('img/automotive/car_mejorada.png') }}"
            class="w-full h-full object-cover object-[center_right] scale-110 brightness-90 contrast-110"
        />

        <div
            class="absolute inset-0 bg-gradient-to-r from-[#0b2b4b]/80 via-[#0b2b4b]/50 to-transparent"
        ></div>

        <div class="absolute inset-0">
            <div
                class="absolute top-20 right-20 w-[500px] h-[500px] bg-blue-400/20 blur-[120px] rounded-full"
            ></div>
            <div
                class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-cyan-300/10 blur-[120px] rounded-full"
            ></div>
        </div>

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

    <div class="container mx-auto max-w-[1280px] px-6 lg:px-10 relative z-10">
        <div class="max-w-[800px]">
            <span
                class="inline-block bg-white/10 px-4 py-1 text-sm text-white rounded-full mb-6"
            >
                Since 1990
            </span>

            <h1 class="text-4xl md:text-6xl font-black text-white">
                Advanced Electrical Design <br />
                <span class="text-blue-300">Solutions</span>
            </h1>

            <p class="mt-6 text-lg text-blue-100">
                Industry-leading electrical distribution system design <br />
                specializing in complex wire harness architecture.
            </p>
        </div>
    </div>
</section>

<!-- CONTENT -->
<div class="px-4 md:px-20 py-16 space-y-24">
    <!-- CAD -->
    <section class="grid md:grid-cols-2 gap-12 items-center" id="cad">
        <!-- TEXTO -->
        <div class="space-y-6">
            <h2 class="text-3xl font-black text-primary">
                Advanced CAD & 3D Modeling
            </h2>

            <p class="text-slate-600 text-lg leading-relaxed">
                Our engineering team utilizes industry-leading platforms
                including
                <span class="font-bold text-primary">CATIA V5/V6</span>,
                <span class="font-bold text-primary">AutoCAD Electrical</span>,
                <span class="font-bold text-primary">Siemens NX</span>, and
                <span class="font-bold text-primary">Teamcenter</span>
                to develop high-precision 3D models, digital twins, and
                manufacturing-ready electrical system architectures.
            </p>

            <!-- BULLETS PRO -->
            <ul class="space-y-3 text-slate-600 text-sm">
                <li class="flex items-start gap-2">
                    <span class="text-primary">•</span>
                    Advanced 3D modeling and simulation using Siemens NX
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary">•</span>
                    Product lifecycle management (PLM) with Teamcenter
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary">•</span>
                    Seamless integration between design and manufacturing
                    processes
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary">•</span>
                    Automated bill-of-materials (BOM) generation
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary">•</span>
                    3D spatial modeling for optimized component placement
                </li>
            </ul>
        </div>

        <!-- IMAGEN -->
        <div
            class="rounded-xl overflow-hidden shadow-2xl bg-slate-100 h-80 relative group"
        >
            <img
                src="{{ asset('img/engineering/engineering-pic.jpg') }}"
                alt="Engineering CAD Design"
                class="w-full h-full object-cover"
            />
            <div
                class="absolute inset-0 bg-primary/20 group-hover:bg-transparent transition-all duration-300"
            ></div>
        </div>
    </section>

    <!-- ROUTING -->
    <section class="grid md:grid-cols-2 gap-12 items-center">
        <img
            src="{{ asset('img/engineering/ArnesSF.png') }}"
            class="rounded-xl shadow"
        />
        <div>
            <h2 class="text-3xl font-black text-primary">Harness Routing</h2>
            <p class="text-slate-600">
                Signal integrity, thermal management and efficiency.
            </p>
        </div>
    </section>

    <!-- VALIDATION -->
    <section
        class="bg-primary text-white p-10 md:p-14 rounded-2xl relative overflow-hidden"
        id="validation"
    >
        <!-- Glow -->
        <div
            class="absolute top-0 right-0 w-[300px] h-[300px] bg-cyan-400/20 blur-[100px] rounded-full"
        ></div>

        <div class="relative z-10 grid md:grid-cols-2 gap-10 items-center">
            <!-- TEXTO -->
            <div class="space-y-6">
                <h2 class="text-3xl font-black">USCAR Validation Standards</h2>

                <p class="text-slate-200 text-lg leading-relaxed">
                    Our validation processes comply with critical automotive
                    standards including
                    <span class="font-bold text-white">USCAR-21</span>,
                    <span class="font-bold text-white">USCAR-38</span>, and
                    <span class="font-bold text-white">USCAR-45</span>, ensuring
                    reliability, durability, and electrical performance in
                    demanding environments.
                </p>

                <!-- BADGES -->
                <div class="flex flex-wrap gap-3">
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm"
                        >USCAR-21</span
                    >
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm"
                        >USCAR-38</span
                    >
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm"
                        >USCAR-45</span
                    >
                </div>

                <!-- BULLETS -->
                <ul class="space-y-3 text-sm text-slate-200">
                    <li class="flex gap-2">
                        <span>✔</span> Crimp validation & cross-section analysis
                    </li>
                    <li class="flex gap-2">
                        <span>✔</span> Mechanical stress and durability testing
                    </li>
                    <li class="flex gap-2">
                        <span>✔</span> Electrical performance verification
                    </li>
                    <li class="flex gap-2">
                        <span>✔</span> Dynamometer (Dyno) testing for real-world
                        simulation
                    </li>
                </ul>
            </div>

            <!-- IMÁGENES -->
            <div class="grid grid-cols-2 gap-4">
                <div class="rounded-xl overflow-hidden shadow-lg group">
                    <img
                        src="{{ asset('img/uscar21/visual.png') }}"
                        class="w-full h-40 object-cover group-hover:scale-110 transition duration-500"
                    />
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg group">
                    <img
                        src="{{
                            asset('img/uscar21/CrossAnalysis_processed.png')
                        }}"
                        class="w-full h-40 object-cover group-hover:scale-110 transition duration-500"
                    />
                </div>

                <div
                    class="rounded-xl overflow-hidden shadow-lg group col-span-2"
                >
                    <img
                        src="{{ asset('img/quality/cross.png') }}"
                        src="{{ asset('img/uscar21/visual.png') }}"
                        class="w-full h-44 object-cover group-hover:scale-110 transition duration-500"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- SCHEMATICS -->
    <section class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-bold">Logical Topologies</h3>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-bold">Component Selection</h3>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-bold">Manufacturing Prints</h3>
        </div>
    </section>

    <!--  NUEVA SECCIÓN ENGINEERING COMPLETA -->
    <section class="space-y-16">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl font-black text-primary">Engineering</h2>
            <p class="text-slate-600 text-lg">
                Engineering is a critical component in wire harness design and
                assembly.
            </p>
        </div>

        <!-- FUNCIONES -->
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold text-primary mb-3">Core Functions</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>Harness routing boards</li>
                    <li>Test fixturing</li>
                    <li>Manufacturing aids</li>
                    <li>Engineering documentation</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold text-primary mb-3">Capabilities</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>AutoCAD planning</li>
                    <li>Process optimization</li>
                    <li>Custom harness development</li>
                </ul>
            </div>
        </div>

        <!-- EXPERIENCIA -->
        <div class="bg-primary text-white p-10 rounded-xl max-w-5xl mx-auto">
            <p>
                With over a decade of experience, EDS delivers high-quality
                harness solutions that help customers stay competitive and
                efficient.
            </p>
        </div>

        <!-- ENGINEERING SHOWCASE (MEJORADA) -->
        <section class="space-y-16">
            <!-- TITULO -->
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-black text-primary">
                    Engineering Capabilities
                </h2>
                <p class="text-slate-600 text-lg">
                    From concept design to final validation, our engineering
                    team delivers complete wire harness solutions across
                    multiple industries.
                </p>
            </div>

            <!-- GRID PRO -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- CARD 1 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-xl"
                >
                    <img
                        src="http://192.168.165.187/img/engineering/team1.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                    ></div>

                    <div class="absolute bottom-0 p-6 text-white">
                        <h4 class="font-bold text-lg">Engineering Schematic</h4>
                        <p class="text-sm text-white/80">
                            CAD-driven schematic design for complex harness
                            systems.
                        </p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-xl"
                >
                    <img
                        src="http://192.168.165.187/img/engineering/team2.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                    ></div>

                    <div class="absolute bottom-0 p-6 text-white">
                        <h4 class="font-bold text-lg">Automotive Harness</h4>
                        <p class="text-sm text-white/80">
                            Custom-engineered automotive wiring solutions.
                        </p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-xl"
                >
                    <img
                        src="http://192.168.165.187/img/engineering/team3.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                    ></div>

                    <div class="absolute bottom-0 p-6 text-white">
                        <h4 class="font-bold text-lg">Appliance Harness</h4>
                        <p class="text-sm text-white/80">
                            High-precision harness solutions for appliance
                            systems.
                        </p>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-xl"
                >
                    <img
                        src="http://192.168.165.187/img/engineering/team4.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                    ></div>

                    <div class="absolute bottom-0 p-6 text-white">
                        <h4 class="font-bold text-lg">Large Scale Harness</h4>
                        <p class="text-sm text-white/80">
                            Complex large-scale automotive harness assemblies.
                        </p>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-xl"
                >
                    <img
                        src="http://192.168.165.187/img/engineering/team5.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                    ></div>

                    <div class="absolute bottom-0 p-6 text-white">
                        <h4 class="font-bold text-lg">
                            Testing Board (Appliance)
                        </h4>
                        <p class="text-sm text-white/80">
                            Functional testing boards ensuring reliability and
                            quality.
                        </p>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-xl"
                >
                    <img
                        src="http://192.168.165.187/img/engineering/team6.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                    ></div>

                    <div class="absolute bottom-0 p-6 text-white">
                        <h4 class="font-bold text-lg">
                            Testing Board (Automotive)
                        </h4>
                        <p class="text-sm text-white/80">
                            Automotive validation systems for performance
                            assurance.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>

@endsection
