@extends('layouts.app') @section('title', 'EDS | Home') @section('content')

<style>
    .logo-item {
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.4s ease;
    }

    .logo-item img {
        height: 85px;
        /* más grande como te gusta */
        object-fit: contain;
        transition: all 0.4s ease;
        filter: grayscale(20%);
    }

    /* HOVER PREMIUM */
    .logo-item:hover img {
        transform: scale(1.15) translateY(-8px);
        filter: grayscale(0%);

        /* sombra elegante */
        filter: drop-shadow(0 15px 25px rgba(2, 6, 23, 0.25));
    }

    /* EFECTO GLOBAL: LOS DEMÁS BAJAN UN POCO */
    .grid:hover .logo-item:not(:hover) img {
        opacity: 0.4;
        transform: scale(0.95);
    }

    /* para ver el cursor mas animado del hero  */
    #typing-text {
        border-right: 2px solid;
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0%,
        50%,
        100% {
            border-color: rgba(147, 197, 253, 1);
        }
        25%,
        75% {
            border-color: transparent;
        }
    }
</style>

<!-- HERO -->

<section class="relative overflow-hidden bg-primary py-20 lg:py-32">
    <div class="absolute inset-0">
        <!-- IMAGEN MÁS VIVA img/quality/automotive-harness.jpg -->

        <img
            id="hero-bg"
            src="{{ asset('img/automotive/car_hero.png') }}"
            alt="Automotive Wiring Harness"
            class="w-full h-full object-cover object-center lg:object-[center_right] transition-transform duration-700 brightness-90 contrast-105"
            style="
                image-rendering: -webkit-optimize-contrast;
                transform: scale(1.01);
            "
        />

        <!-- OVERLAY  -->
        <div
            class="absolute inset-0 bg-gradient-to-r from-[#0b2b4b]/80 via-[#0b2b4b]/50 to-transparent"
        ></div>

        <!-- EFECTO DE PROFUNDIDAD (GRADIENT LIGHT) -->
        <div class="absolute inset-0">
            <div
                class="absolute top-20 right-20 w-[500px] h-[500px] bg-blue-400/20 blur-[120px] rounded-full"
            ></div>

            <div
                class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-cyan-300/10 blur-[120px] rounded-full"
            ></div>
        </div>

        <!-- GRID TECNOLÓGICO SUTIL -->
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
                High Quality Wire Harness <br />
                <span class="text-blue-300">Solutions</span>
            </h1>

            <p class="mt-6 text-lg text-blue-100">
                World-class supplier of wire harnesses <br />

                <span
                    id="typing-text"
                    class="border-r-2 border-blue-300 pr-1"
                ></span>
            </p>

            <div class="mt-8 flex gap-4">
                <!-- Botón secundario: Our Services
                    <a href="#services"
                        class="border border-white text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-400 transition">
                        Our Services
                    </a>
-->
                <!-- Botón principal: Contact -->
                <a
                    href="{{ route('web.contact') }}"
                    class="bg-white text-primary px-6 py-3 rounded-lg font-bold hover:bg-blue-400 transition"
                >
                    Contact
                </a>
            </div>
        </div>
    </div>
</section>

<!-- WHO WE ARE -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <!-- TITLE -->
        <h2 class="text-4xl font-black text-primary mb-6">Who We Are</h2>

        <!-- TEXTO PRINCIPAL -->
        <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed mb-16">
            <span class="text-blue-600 font-bold">EDS</span> Manufacturing, Inc.
            is an IATF 16949 and ISO 9001 certified world-class supplier of
            electrical wire harnesses, battery cables, and electro-mechanical
            assemblies to the Automotive, Appliance, and Commercial Vehicle
            markets.

            <br /><br />

            Founded in 1990 as a management buyout of a wire harness and switch
            division of the Burroughs Corporation,
            <span class="text-blue-600 font-bold">EDS</span> has the resources
            and commitment to meet your electrical distribution needs, from
            inception to completion. Our solutions are reliable, cost-efficient,
            and backed by engineering expertise and a strong commitment to
            quality.
        </p>

        <!-- ICONOS / VALORES -->
        <div class="grid md:grid-cols-3 gap-10">
            <!-- CARD -->
            <div
                class="group p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:shadow-xl transition duration-500 hover:-translate-y-2"
            >
                <div
                    class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-xl bg-primary/10 text-primary text-2xl"
                >
                    ⚙️
                </div>

                <h3 class="font-bold text-lg mb-2">Engineering Excellence</h3>

                <p class="text-sm text-slate-500">
                    Advanced design and development of complex wire harness
                    systems.
                </p>
            </div>

            <!-- CARD -->
            <div
                class="group p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:shadow-xl transition duration-500 hover:-translate-y-2"
            >
                <div
                    class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-xl bg-primary/10 text-primary text-2xl"
                >
                    🏭
                </div>

                <h3 class="font-bold text-lg mb-2">Full Manufacturing</h3>

                <p class="text-sm text-slate-500">
                    From prototype to high-volume production with precision
                    processes.
                </p>
            </div>

            <!-- CARD -->
            <div
                class="group p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:shadow-xl transition duration-500 hover:-translate-y-2"
            >
                <div
                    class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-xl bg-primary/10 text-primary text-2xl"
                >
                    ✔️
                </div>

                <h3 class="font-bold text-lg mb-2">Certified Quality</h3>

                <p class="text-sm text-slate-500">
                    IATF 16949 & ISO 9001 standards ensuring reliability and
                    performance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- INDUSTRIES -->
<section class="py-24 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-16">
            Industries We Serve
        </h2>

        <div class="grid md:grid-cols-3 gap-12">
            <!-- AUTOMOTIVE -->
            <a
                href="{{ route('web.industries', ['category' => 'automotive']) }}"
            >
                <div
                    class="group relative overflow-hidden rounded-2xl cursor-pointer"
                >
                    <img
                        src="{{ asset('img/automotive/BMWM42025.png') }}"
                        class="w-full h-64 object-cover transition duration-700 group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/80"
                    ></div>

                    <div
                        class="absolute inset-0 flex items-center justify-center"
                    >
                        <h3 class="text-white text-2xl font-bold">
                            Automotive
                        </h3>
                    </div>
                </div>
            </a>

            <!-- APPLIANCE -->
            <a
                href="{{ route('web.industries', ['category' => 'appliance']) }}"
            >
                <div
                    class="group relative overflow-hidden rounded-2xl cursor-pointer"
                >
                    <img
                        src="{{
                            asset('img/homeAppliance/subzero-Appliance.png')
                        }}"
                        class="w-full h-64 object-cover transition duration-700 group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/80"
                    ></div>

                    <div
                        class="absolute inset-0 flex items-center justify-center"
                    >
                        <h3 class="text-white text-2xl font-bold">Appliance</h3>
                    </div>
                </div>
            </a>

            <!-- COMMERCIAL -->
            <a
                href="{{ route('web.industries', ['category' => 'commercial']) }}"
            >
                <div
                    class="group relative overflow-hidden rounded-2xl cursor-pointer"
                >
                    <img
                        src="{{ asset('img/commercialVehicle/BUSYellow.png') }}"
                        class="w-full h-64 object-cover transition duration-700 group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/80"
                    ></div>

                    <div
                        class="absolute inset-0 flex items-center justify-center"
                    >
                        <h3 class="text-white text-2xl font-bold">
                            Commercial Vehicles
                        </h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CLIENTS PRO -->
<section class="py-24 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2
            class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-4"
        >
            Trusted by Industry Leaders
        </h2>

        <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto mb-16">
            Partnering with global manufacturers delivering precision and
            innovation.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-16">
            <div class="logo-item">
                <img src="{{ asset('img/clients/ficosa.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/ford.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/Honeywell.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/IAC.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/International.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/Lucid.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/Magna.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/Murakami.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/Subzero.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/Turbochef.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/Whirlpool.png') }}" />
            </div>

            <div class="logo-item">
                <img src="{{ asset('img/clients/generalMotor.png') }}" />
            </div>
        </div>
    </div>
</section>

<!-- CAPABILITIES -->
<section class="py-24 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6">
        <!-- HEADER -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-slate-900 dark:text-white">
                Core Capabilities
            </h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                Advanced wire harness solutions from engineering to full-scale
                production and quality validation.
            </p>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-10">
            <!-- ENGINEERING -->
            <div
                class="group relative h-[340px] rounded-2xl overflow-hidden cursor-pointer"
            >
                <img
                    src="{{ asset('img/ingenerio.jpg') }}"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110"
                />

                <!-- overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"
                ></div>

                <!-- glow -->
                <div
                    class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500"
                >
                    <div
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-52 h-52 bg-primary/30 blur-3xl"
                    ></div>
                </div>

                <!-- content -->
                <div
                    class="relative z-10 h-full flex flex-col justify-end p-6 text-white"
                >
                    <h3
                        class="text-2xl font-bold mb-2 transition group-hover:-translate-y-2"
                    >
                        Engineering
                    </h3>
                    <p
                        class="text-sm opacity-0 group-hover:opacity-100 transition duration-500"
                    >
                        Design and development of complex wiring harness systems
                        with precision engineering.
                    </p>
                </div>
            </div>

            <!-- MANUFACTURING -->
            <div
                class="group relative h-[340px] rounded-2xl overflow-hidden cursor-pointer"
            >
                <img
                    src="{{ asset('img/quality/quality2.jpg') }}"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110"
                />

                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"
                ></div>

                <div
                    class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500"
                >
                    <div
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-52 h-52 bg-primary/30 blur-3xl"
                    ></div>
                </div>

                <div
                    class="relative z-10 h-full flex flex-col justify-end p-6 text-white"
                >
                    <h3
                        class="text-2xl font-bold mb-2 transition group-hover:-translate-y-2"
                    >
                        Manufacturing
                    </h3>
                    <p
                        class="text-sm opacity-0 group-hover:opacity-100 transition duration-500"
                    >
                        High-volume harness assembly using advanced production
                        lines and precision tools.
                    </p>
                </div>
            </div>

            <!-- QUALITY -->
            <div
                class="group relative h-[340px] rounded-2xl overflow-hidden cursor-pointer"
            >
                <img
                    src="{{ asset('img/home/Tablero5SF.png') }}"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110"
                />

                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"
                ></div>

                <div
                    class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500"
                >
                    <div
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-52 h-52 bg-primary/30 blur-3xl"
                    ></div>
                </div>

                <div
                    class="relative z-10 h-full flex flex-col justify-end p-6 text-white"
                >
                    <h3
                        class="text-2xl font-bold mb-2 transition group-hover:-translate-y-2"
                    >
                        Quality
                    </h3>
                    <p
                        class="text-sm opacity-0 group-hover:opacity-100 transition duration-500"
                    >
                        Inspection, validation, and compliance ensuring
                        reliability in every harness system.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE EDS -->
<section class="py-24 bg-slate-50 dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6">
        <!-- HEADER -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-slate-900 dark:text-white">
                Why Choose EDS
            </h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                Delivering world-class wire harness solutions with precision,
                reliability, and unmatched industry expertise.
            </p>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- ITEM -->
            <div
                class="group p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-xl"
            >
                <div class="text-3xl mb-4">🏆</div>
                <h3
                    class="font-bold text-lg mb-2 text-slate-900 dark:text-white"
                >
                    30+ Years Experience
                </h3>
                <p class="text-sm text-slate-500">
                    Since 1990, delivering proven results across automotive,
                    appliance, and commercial industries.
                </p>
            </div>

            <!-- ITEM -->
            <div
                class="group p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-xl"
            >
                <div class="text-3xl mb-4">📈</div>
                <h3
                    class="font-bold text-lg mb-2 text-slate-900 dark:text-white"
                >
                    9500% Growth
                </h3>
                <p class="text-sm text-slate-500">
                    Sustained organic growth with zero long-term debt — a strong
                    and reliable partner.
                </p>
            </div>

            <!-- ITEM -->
            <div
                class="group p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-xl"
            >
                <div class="text-3xl mb-4">✔️</div>
                <h3
                    class="font-bold text-lg mb-2 text-slate-900 dark:text-white"
                >
                    Certified Quality
                </h3>
                <p class="text-sm text-slate-500">
                    ISO 9001 & IATF 16949 certified processes ensuring top-tier
                    quality and compliance.
                </p>
            </div>

            <!-- ITEM -->
            <div
                class="group p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-xl"
            >
                <div class="text-3xl mb-4">🌎</div>
                <h3
                    class="font-bold text-lg mb-2 text-slate-900 dark:text-white"
                >
                    Bilingual Support
                </h3>
                <p class="text-sm text-slate-500">
                    Seamless communication across U.S. and Mexico operations for
                    efficient collaboration.
                </p>
            </div>

            <!-- ITEM -->
            <div
                class="group p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-xl"
            >
                <div class="text-3xl mb-4">⏱️</div>
                <h3
                    class="font-bold text-lg mb-2 text-slate-900 dark:text-white"
                >
                    On-Time Delivery
                </h3>
                <p class="text-sm text-slate-500">
                    Reliable production and logistics processes ensuring
                    deadlines are always met.
                </p>
            </div>

            <!-- ITEM -->
            <div
                class="group p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-xl"
            >
                <div class="text-3xl mb-4">🤝</div>
                <h3
                    class="font-bold text-lg mb-2 text-slate-900 dark:text-white"
                >
                    Dedicated Account Manager
                </h3>
                <p class="text-sm text-slate-500">
                    Personalized support with fast response times and expert
                    guidance at every stage.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- VALUE -->
<section class="py-24 bg-white dark:bg-slate-950">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-10 text-center">
            <!-- CARD 1 -->
            <div
                class="group p-8 rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(2,6,23,0.25)]"
            >
                <div
                    class="text-3xl font-black text-primary mb-4 group-hover:scale-110 transition duration-300"
                >
                    01
                </div>

                <h3
                    class="font-bold text-lg text-slate-900 dark:text-white mb-2"
                >
                    Exceptional Value
                </h3>

                <p class="text-sm text-slate-500">
                    World-class quality with competitive and scalable pricing.
                </p>
            </div>

            <!-- CARD 2 -->
            <div
                class="group p-8 rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(2,6,23,0.25)]"
            >
                <div
                    class="text-3xl font-black text-primary mb-4 group-hover:scale-110 transition duration-300"
                >
                    02
                </div>

                <h3
                    class="font-bold text-lg text-slate-900 dark:text-white mb-2"
                >
                    Complete Solutions
                </h3>

                <p class="text-sm text-slate-500">
                    From engineering to manufacturing under one integrated
                    system.
                </p>
            </div>

            <!-- CARD 3 -->
            <div
                class="group p-8 rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(2,6,23,0.25)]"
            >
                <div
                    class="text-3xl font-black text-primary mb-4 group-hover:scale-110 transition duration-300"
                >
                    03
                </div>

                <h3
                    class="font-bold text-lg text-slate-900 dark:text-white mb-2"
                >
                    Innovative Design
                </h3>

                <p class="text-sm text-slate-500">
                    Cost-efficient solutions optimized for performance and
                    reliability.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CERTIFICATIONS -->
<section class="py-24 bg-slate-50 dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-primary mb-4">
                Certifications & Compliance
            </h2>
            <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">
                Our commitment to quality, safety, and global manufacturing
                standards.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">
            <!-- CARD 1 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_25px_60px_rgba(2,6,23,0.25)]"
            >
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary/0 via-primary to-primary/0 opacity-0 group-hover:opacity-100 transition"
                ></div>

                <div class="p-6">
                    <!-- ICON -->
                    <div class="mb-6 flex justify-center">
                        <div
                            class="h-16 w-16 flex items-center justify-center rounded-xl bg-primary/10 text-primary text-2xl font-bold transition duration-500 group-hover:scale-110 group-hover:shadow-[0_10px_25px_rgba(11,43,75,0.3)]"
                        >
                            ISO
                        </div>
                    </div>

                    <h3
                        class="text-lg font-bold text-slate-900 dark:text-white text-center"
                    >
                        ISO 9001
                    </h3>
                    <p
                        class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2"
                    >
                        Quality Management System
                    </p>

                    <a
                        href="{{
                            asset(
                                'certs/newCerts/ISO 9001 2015 Certificate (FM 83384).pdf'
                            )
                        }}"
                        target="_blank"
                        class="mt-6 flex items-center justify-center gap-2 text-primary font-semibold transition-all group hover:text-blue-400"
                    >
                        <!-- Icono PDF -->
                        <svg
                            class="w-5 h-5 transition-colors duration-300"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M6 2h9l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zM15 3.5V8h4.5L15 3.5z"
                            />
                        </svg>
                        View Certificate
                    </a>
                </div>
            </div>

            <!-- CARD 2 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_25px_60px_rgba(2,6,23,0.25)]"
            >
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary/0 via-primary to-primary/0 opacity-0 group-hover:opacity-100 transition"
                ></div>
                <div class="p-6">
                    <div class="mb-6 flex justify-center">
                        <div
                            class="h-16 w-16 flex items-center justify-center rounded-xl bg-primary/10 text-primary text-xl font-bold transition duration-500 group-hover:scale-110 group-hover:shadow-[0_10px_25px_rgba(11,43,75,0.3)]"
                        >
                            IATF
                        </div>
                    </div>
                    <h3
                        class="text-lg font-bold text-slate-900 dark:text-white text-center"
                    >
                        IATF 16949
                    </h3>
                    <p
                        class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2"
                    >
                        Automotive Quality Standard
                    </p>
                    <a
                        href="{{
                            asset(
                                'certs/newCerts/IAFT-16949-certificate-(TS 586828-001)-Magdalena-Plant.pdf'
                            )
                        }}"
                        target="_blank"
                        class="mt-6 flex items-center justify-center gap-2 text-primary font-semibold transition-all group hover:text-blue-400"
                    >
                        <svg
                            class="w-5 h-5 transition-colors duration-300"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M6 2h9l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zM15 3.5V8h4.5L15 3.5z"
                            />
                        </svg>
                        View Certificate
                    </a>
                </div>
            </div>

            <!-- CARD 3 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_25px_60px_rgba(2,6,23,0.25)]"
            >
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary/0 via-primary to-primary/0 opacity-0 group-hover:opacity-100 transition"
                ></div>
                <div class="p-6">
                    <div class="mb-6 flex justify-center">
                        <div
                            class="h-16 w-16 flex items-center justify-center rounded-xl bg-primary/10 text-primary text-xl font-bold transition duration-500 group-hover:scale-110 group-hover:shadow-[0_10px_25px_rgba(11,43,75,0.3)]"
                        >
                            ISO
                        </div>
                    </div>
                    <h3
                        class="text-lg font-bold text-slate-900 dark:text-white text-center"
                    >
                        ISO 14001
                    </h3>
                    <p
                        class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2"
                    >
                        Environmental Management
                    </p>
                    <a
                        href="{{ asset('certs\ISO14001 EDS-EK.pdf') }}"
                        target="_blank"
                        class="mt-6 flex items-center justify-center gap-2 text-primary font-semibold transition-all group hover:text-blue-400"
                    >
                        <svg
                            class="w-5 h-5 transition-colors duration-300"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M6 2h9l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zM15 3.5V8h4.5L15 3.5z"
                            />
                        </svg>
                        View Certificate
                    </a>
                </div>
            </div>

            <!-- CARD 4 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_25px_60px_rgba(2,6,23,0.25)]"
            >
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary/0 via-primary to-primary/0 opacity-0 group-hover:opacity-100 transition"
                ></div>
                <div class="p-6">
                    <div class="mb-6 flex justify-center">
                        <div
                            class="h-16 w-16 flex items-center justify-center rounded-xl bg-primary/10 text-primary text-xl font-bold transition duration-500 group-hover:scale-110 group-hover:shadow-[0_10px_25px_rgba(11,43,75,0.3)]"
                        >
                            CTPAT
                        </div>
                    </div>
                    <h3
                        class="text-lg font-bold text-slate-900 dark:text-white text-center"
                    >
                        CTPAT Certified
                    </h3>
                    <p
                        class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2"
                    >
                        Supply Chain Security
                    </p>
                    <a
                        href="{{ route('certified') }}"
                        class="mt-6 flex items-center justify-center gap-2 text-primary font-semibold transition-all group hover:text-blue-400"
                    >
                        <svg
                            class="w-5 h-5 transition-colors duration-300"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M6 2h9l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zM15 3.5V8h4.5L15 3.5z"
                            />
                        </svg>
                        View Certificate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20">
    <div
        class="max-w-3xl mx-auto bg-primary text-white text-center p-10 rounded-xl"
    >
        <h2 class="text-3xl font-black mb-4">
            Get in Touch with
            <span class="text-blue-400">EDS Manufacturing, Inc.</span>
        </h2>
        <p class="text-blue-100 mb-6">
            Contact us today to discuss your wiring harness, battery cable, or
            electro-mechanical assembly needs.
        </p>

        <a
            href="{{ route('web.contact') }}"
            class="bg-blue-400 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-500 transition"
        >
            Contact Us
        </a>
    </div>
</section>

<!-- Locations Section -->
<section id="locations" class="py-16 bg-gray-900 text-white">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Title -->
        <h2 class="text-3xl font-bold mb-10 text-center">Our Locations</h2>

        <div class="grid lg:grid-cols-2 gap-10">
            <!-- LEFT: Locations -->
            <div class="grid sm:grid-cols-2 gap-6">
                <!-- Corporate HQ -->
                <div
                    onclick="
                        changeMap(
                            this,
                            '765 N Target Range Road, Nogales AZ 85621',
                        )
                    "
                    class="location-card cursor-pointer bg-blue-600 border border-blue-400 scale-105 rounded-xl p-5 transition"
                >
                    <div class="flex items-start gap-3">
                        <span class="text-white text-xl">📍</span>
                        <div>
                            <h3 class="font-semibold">
                                Corporate HQ & Distribution
                            </h3>
                            <p class="text-sm text-white/80">Nogales, AZ USA</p>
                            <p class="text-xs text-white/60">110,000 SQ FT</p>
                        </div>
                    </div>
                </div>

                <!-- Magdalena -->
                <div
                    onclick="
                        changeMap(
                            this,
                            'Av. Niños Héroes 1051, Magdalena de Kino, Sonora, Mexico',
                        )
                    "
                    class="location-card cursor-pointer bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition"
                >
                    <div class="flex items-start gap-3">
                        <span class="text-blue-400 text-xl">📍</span>
                        <div>
                            <h3 class="font-semibold">Manufacturing</h3>
                            <p class="text-sm text-gray-300">
                                Magdalena, Sonora MX
                            </p>
                            <p class="text-xs text-gray-400">135,000 SQ FT</p>
                        </div>
                    </div>
                </div>

                <!-- M3 -->
                <div
                    onclick="
                        changeMap(
                            this,
                            'Ave Prolongacion Alvaro Obregon 3673, Nogales Sonora Mexico',
                        )
                    "
                    class="location-card cursor-pointer bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition"
                >
                    <div class="flex items-start gap-3">
                        <span class="text-blue-400 text-xl">📍</span>
                        <div>
                            <h3 class="font-semibold">M3</h3>
                            <p class="text-sm text-gray-300">
                                Nogales, Sonora MX
                            </p>
                            <p class="text-xs text-gray-400">Zona Industrial</p>
                        </div>
                    </div>
                </div>

                <!-- El Salvador -->
                <div
                    onclick="
                        changeMap(
                            this,
                            'RH6H+562, Ciudad Arce, La Libertad, El Salvador',
                        )
                    "
                    class="location-card cursor-pointer bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition"
                >
                    <div class="flex items-start gap-3">
                        <span class="text-blue-400 text-xl">📍</span>
                        <div>
                            <h3 class="font-semibold">EDS El Salvador</h3>
                            <p class="text-sm text-gray-300">
                                Ciudad Arce, La Libertad
                            </p>
                            <p class="text-xs text-gray-400">American Park</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Map -->
            <div
                class="w-full h-[400px] rounded-xl overflow-hidden border border-white/10 shadow-lg"
            >
                <iframe
                    id="mapFrame"
                    src="https://www.google.com/maps?q=765 N Target Range Road, Nogales AZ 85621&output=embed"
                    width="100%"
                    height="100%"
                    style="border: 0"
                    loading="lazy"
                >
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- Script -->

<script>
    window.addEventListener("scroll", function () {
        const scrolled = window.scrollY;
        const bg = document.getElementById("hero-bg");

        bg.style.transform = `translateY(${scrolled * 0.3}px) scale(1.1)`;
    });
</script>
<script>
    function changeMap(element, location) {
        // Cambiar mapa
        document.getElementById("mapFrame").src =
            `https://www.google.com/maps?q=${location}&output=embed`;

        // Quitar activo de todos
        document.querySelectorAll(".location-card").forEach((card) => {
            card.classList.remove(
                "bg-blue-600",
                "border-blue-400",
                "scale-105",
            );
            card.classList.add("bg-white/5", "border-white/10");
        });

        // Activar el seleccionado
        element.classList.remove("bg-white/5", "border-white/10");
        element.classList.add("bg-blue-600", "border-blue-400", "scale-105");
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const texts = [
            "battery cables, and electro-mechanical assemblies.",
            "high-performance electrical systems.",
            "custom engineering solutions.",
        ];

        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        const speed = 60;
        const deleteSpeed = 30;
        const pauseTime = 1500;

        const el = document.getElementById("typing-text");

        function typeLoop() {
            const currentText = texts[textIndex];

            if (isDeleting) {
                charIndex--;
            } else {
                charIndex++;
            }

            el.innerHTML = currentText.substring(0, charIndex);

            // TERMINÓ DE ESCRIBIR
            if (!isDeleting && charIndex === currentText.length) {
                isDeleting = true;
                setTimeout(typeLoop, pauseTime);
                return;
            }

            // TERMINÓ DE BORRAR
            if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
            }

            setTimeout(typeLoop, isDeleting ? deleteSpeed : speed);
        }

        typeLoop();
    });
</script>

@endsection
