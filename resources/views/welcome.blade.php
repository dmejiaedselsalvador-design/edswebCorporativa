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

<section class="relative overflow-hidden bg-[#0b2b4b] py-20 lg:py-32">
    <div class="absolute inset-0">
        <img
            id="hero-bg"
            src="{{ asset('img/automotive/car_hero.png') }}"
            alt="Automotive Wiring Harness"
            class="w-full h-full object-cover transition-transform duration-700 brightness-90 contrast-105"
            style="
                image-rendering: -webkit-optimize-contrast;
                transform: scale(1.01);
                /* Ajuste clave: Mantiene el 80% de la imagen (donde está el carro) siempre a la vista */
                object-position: 80% center;
            "
        />

        <div
            class="absolute inset-0 bg-gradient-to-r from-[#0b2b4b] via-[#0b2b4b]/60 to-transparent"
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
        <h2
            class="text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white mb-16 sm:text-5xl"
        >
            Industries We Serve
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <a
                href="{{ route('web.industries', ['category' => 'automotive']) }}"
                class="group relative block h-80 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 bg-slate-100 dark:bg-slate-900"
            >
                <img
                    src="{{ asset('img/automotive/BMWM42025.png') }}"
                    alt="Automotive industry illustration"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                />

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent transition-opacity duration-500 group-hover:from-black/85 group-hover:via-black/40"
                ></div>

                <div
                    class="absolute inset-0 border-2 border-primary/0 rounded-3xl transition-colors duration-500 group-hover:border-primary/40"
                ></div>

                <div
                    class="relative z-10 h-full flex flex-col justify-end p-8 text-white"
                >
                    <div
                        class="mb-3 text-primary opacity-80 transition group-hover:opacity-100 group-hover:-translate-y-1"
                    >
                        <svg
                            class="w-7 h-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                            />
                        </svg>
                    </div>

                    <h3
                        class="text-3xl font-bold tracking-tight transition-transform duration-500 group-hover:-translate-y-1"
                    >
                        Automotive
                    </h3>
                </div>
            </a>

            <a
                href="{{ route('web.industries', ['category' => 'appliance']) }}"
                class="group relative block h-80 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 bg-slate-100 dark:bg-slate-900"
            >
                <img
                    src="{{ asset('img/homeAppliance/subzero-Appliance.png') }}"
                    alt="Home appliance operation"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent transition-opacity duration-500 group-hover:from-black/85 group-hover:via-black/40"
                ></div>
                <div
                    class="absolute inset-0 border-2 border-primary/0 rounded-3xl transition-colors duration-500 group-hover:border-primary/40"
                ></div>
                <div
                    class="relative z-10 h-full flex flex-col justify-end p-8 text-white"
                >
                    <div
                        class="mb-3 text-primary opacity-80 transition group-hover:opacity-100 group-hover:-translate-y-1"
                    >
                        <svg
                            class="w-7 h-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z"
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-3xl font-bold tracking-tight transition-transform duration-500 group-hover:-translate-y-1"
                    >
                        Appliance
                    </h3>
                </div>
            </a>

            <a
                href="{{ route('web.industries', ['category' => 'commercial']) }}"
                class="group relative block h-80 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 bg-slate-100 dark:bg-slate-900"
            >
                <img
                    src="{{ asset('img/commercialVehicle/BUSYellow.png') }}"
                    alt="Commercial vehicle validation"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent transition-opacity duration-500 group-hover:from-black/85 group-hover:via-black/40"
                ></div>
                <div
                    class="absolute inset-0 border-2 border-primary/0 rounded-3xl transition-colors duration-500 group-hover:border-primary/40"
                ></div>
                <div
                    class="relative z-10 h-full flex flex-col justify-end p-8 text-white"
                >
                    <div
                        class="mb-3 text-primary opacity-80 transition group-hover:opacity-100 group-hover:-translate-y-1"
                    >
                        <svg
                            class="w-7 h-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-3xl font-bold tracking-tight transition-transform duration-500 group-hover:-translate-y-1"
                    >
                        Commercial Vehicles
                    </h3>
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
        <div class="text-center mb-16">
            <h2
                class="text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl"
            >
                Core Capabilities
            </h2>
            <p
                class="mt-4 text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto"
            >
                End-to-end wire harness solutions. Precision engineering,
                high-volume production, and rigorous quality validation.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div
                class="group relative h-[400px] rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 bg-slate-100 dark:bg-slate-900"
            >
                <img
                    src="{{
                        asset(
                            'img/engineering/harnes_regenerado_engineering.png'
                        )
                    }}"
                    alt="Engineering capability illustration"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                />

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/10 transition-opacity duration-500 group-hover:from-black/90 group-hover:via-black/50"
                ></div>

                <div
                    class="absolute inset-0 border-2 border-primary/0 rounded-3xl transition-colors duration-500 group-hover:border-primary/50"
                ></div>

                <div
                    class="relative z-10 h-full flex flex-col justify-end p-8 text-white"
                >
                    <div
                        class="mb-4 text-primary opacity-80 transition group-hover:opacity-100 group-hover:-translate-y-1"
                    >
                        <svg
                            class="w-8 h-8"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>
                    </div>

                    <h3
                        class="text-3xl font-bold tracking-tight transition-transform duration-500 group-hover:-translate-y-1"
                    >
                        Engineering
                    </h3>

                    <div
                        class="max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:max-h-24 group-hover:opacity-100 group-hover:mt-3"
                    >
                        <p class="text-base text-slate-200 leading-relaxed">
                            Design and development of complex wiring harness
                            systems with precision engineering.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="group relative h-[400px] rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 bg-slate-100 dark:bg-slate-900"
            >
                <img
                    src="{{ asset('img/quality/quality2.jpg') }}"
                    alt="Manufacturing operation"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/10 transition-opacity duration-500 group-hover:from-black/90 group-hover:via-black/50"
                ></div>
                <div
                    class="absolute inset-0 border-2 border-primary/0 rounded-3xl transition-colors duration-500 group-hover:border-primary/50"
                ></div>
                <div
                    class="relative z-10 h-full flex flex-col justify-end p-8 text-white"
                >
                    <div
                        class="mb-4 text-primary opacity-80 transition group-hover:opacity-100 group-hover:-translate-y-1"
                    >
                        <svg
                            class="w-8 h-8"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-3xl font-bold tracking-tight transition-transform duration-500 group-hover:-translate-y-1"
                    >
                        Manufacturing
                    </h3>
                    <div
                        class="max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:max-h-24 group-hover:opacity-100 group-hover:mt-3"
                    >
                        <p class="text-base text-slate-200 leading-relaxed">
                            High-volume harness assembly using advanced
                            production lines and precision tools.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="group relative h-[400px] rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 bg-slate-100 dark:bg-slate-900"
            >
                <img
                    src="{{ asset('img/home/Tablero5SF.png') }}"
                    alt="Quality validation process"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/10 transition-opacity duration-500 group-hover:from-black/90 group-hover:via-black/50"
                ></div>
                <div
                    class="absolute inset-0 border-2 border-primary/0 rounded-3xl transition-colors duration-500 group-hover:border-primary/50"
                ></div>
                <div
                    class="relative z-10 h-full flex flex-col justify-end p-8 text-white"
                >
                    <div
                        class="mb-4 text-primary opacity-80 transition group-hover:opacity-100 group-hover:-translate-y-1"
                    >
                        <svg
                            class="w-8 h-8"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-3xl font-bold tracking-tight transition-transform duration-500 group-hover:-translate-y-1"
                    >
                        Quality
                    </h3>
                    <div
                        class="max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:max-h-24 group-hover:opacity-100 group-hover:mt-3"
                    >
                        <p class="text-base text-slate-200 leading-relaxed">
                            Inspection, validation, and compliance ensuring
                            reliability in every harness system.
                        </p>
                    </div>
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
<section id="locations" class="py-24 bg-slate-950 text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold tracking-tight sm:text-5xl">
                Our Locations
            </h2>
            <p class="text-slate-400 mt-4">
                Strategic manufacturing and distribution points across North and
                Central America.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <div class="grid sm:grid-cols-2 gap-6">
                <div
                    onclick="
                        changeMap(
                            this,
                            '765 N Target Range Road, Nogales AZ 85621',
                        )
                    "
                    class="location-card cursor-pointer bg-blue-600 border border-blue-400 scale-105 rounded-2xl p-6 transition-all duration-300 shadow-lg shadow-blue-900/20"
                >
                    <div class="flex items-start gap-4">
                        <span class="text-2xl">📍</span>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">
                                Corporate HQ & Distribution
                            </h3>
                            <p class="text-sm text-white/90 mt-1">
                                Nogales, AZ USA
                            </p>
                            <p
                                class="inline-block mt-2 px-2 py-1 bg-white/20 rounded text-[10px] font-bold tracking-wider uppercase"
                            >
                                110,000 SQ FT
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    onclick="
                        changeMap(
                            this,
                            'Av. Niños Héroes 1051, Magdalena de Kino, Sonora, Mexico',
                        )
                    "
                    class="location-card cursor-pointer bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 shadow-xl"
                >
                    <div class="flex items-start gap-4">
                        <span class="text-blue-400 text-2xl">📍</span>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">
                                Manufacturing
                            </h3>
                            <p class="text-sm text-slate-400 mt-1">
                                Magdalena, Sonora MX
                            </p>
                            <p
                                class="inline-block mt-2 px-2 py-1 bg-white/10 rounded text-[10px] font-bold tracking-wider uppercase"
                            >
                                135,000 SQ FT
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    onclick="
                        changeMap(
                            this,
                            'Ave Prolongacion Alvaro Obregon 3673, Nogales Sonora Mexico',
                        )
                    "
                    class="location-card cursor-pointer bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 shadow-xl"
                >
                    <div class="flex items-start gap-4">
                        <span class="text-blue-400 text-2xl">📍</span>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">
                                M3 Plant
                            </h3>
                            <p class="text-sm text-slate-400 mt-1">
                                Nogales, Sonora MX
                            </p>
                            <p
                                class="inline-block mt-2 px-2 py-1 bg-white/10 rounded text-[10px] font-bold tracking-wider uppercase"
                            >
                                54,000 SQ FT
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    onclick="
                        changeMap(
                            this,
                            'RH6H+562, Ciudad Arce, La Libertad, El Salvador',
                        )
                    "
                    class="location-card cursor-pointer bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 shadow-xl"
                >
                    <div class="flex items-start gap-4">
                        <span class="text-blue-400 text-2xl">📍</span>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">
                                EDS El Salvador
                            </h3>
                            <p class="text-sm text-slate-400 mt-1">
                                Ciudad Arce, La Libertad
                            </p>
                            <p
                                class="inline-block mt-2 px-2 py-1 bg-white/10 rounded text-[10px] font-bold tracking-wider uppercase"
                            >
                                55,000 SQ FT
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="w-full h-[450px] rounded-3xl overflow-hidden border border-white/10 shadow-2xl relative"
            >
                <iframe
                    id="mapFrame"
                    src="https://maps.google.com/maps?q=765%20N%20Target%20Range%20Road,%20Nogales%20AZ%2085621&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="100%"
                    style="
                        border: 0;
                        filter: grayscale(1) invert(0.9) contrast(1.2);
                    "
                    loading="lazy"
                >
                </iframe>
                <div
                    class="absolute inset-0 pointer-events-none border-[12px] border-slate-950/20 rounded-3xl"
                ></div>
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
