@extends('layouts.app') @section('title', 'EDS | Manufacturing')
@section('content')

<div class="w-full max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <section
        class="relative overflow-hidden bg-primary rounded-3xl mt-4 py-16 md:py-24 lg:py-32"
    >
        <div class="absolute inset-0">
            <img
                src="{{
                    asset('img/machine_wire_automatice/wire_automatice_10.jpeg')
                }}"
                class="w-full h-full object-cover object-center scale-110 brightness-75 contrast-110"
                alt="Manufacturing Hero"
            />

            <div
                class="absolute inset-0 bg-gradient-to-r from-[#0b2b4b]/90 via-[#0b2b4b]/70 to-transparent"
            ></div>

            <div class="absolute inset-0 hidden md:block">
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

        <div class="container mx-auto relative z-10 px-4 md:px-10">
            <div class="max-w-[800px]">
                <span
                    class="inline-block bg-white/10 px-4 py-1 text-xs md:text-sm text-white rounded-full mb-6 backdrop-blur border border-white/20"
                >
                    Since 1990
                </span>

                <h1
                    class="text-3xl sm:text-4xl md:text-6xl font-black text-white leading-tight"
                >
                    Advanced Manufacturing <br class="hidden sm:block" />
                    <span class="text-blue-300">& Automation</span>
                </h1>

                <p
                    class="mt-6 text-base md:text-lg text-blue-100 max-w-xl leading-relaxed"
                >
                    Leveraging high-performance
                    <span class="font-bold text-white">Artos</span> and
                    <span class="font-bold text-white">Komax</span>
                    automation systems to deliver precision, efficiency, and
                    scalability.
                </p>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-12 md:py-16">
        <div
            class="p-8 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition"
        >
            <span class="material-symbols-outlined text-primary text-4xl"
                >precision_manufacturing</span
            >
            <p
                class="text-xs text-slate-500 uppercase font-bold mt-3 tracking-wider"
            >
                Annual Capacity
            </p>
            <p class="text-4xl font-black text-primary">50M+</p>
        </div>

        <div
            class="p-8 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition"
        >
            <span class="material-symbols-outlined text-primary text-4xl"
                >settings_input_component</span
            >
            <p
                class="text-xs text-slate-500 uppercase font-bold mt-3 tracking-wider"
            >
                Precision
            </p>
            <p class="text-4xl font-black text-primary">0.001mm</p>
        </div>

        <div
            class="p-8 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition"
        >
            <span class="material-symbols-outlined text-primary text-4xl"
                >smart_toy</span
            >
            <p
                class="text-xs text-slate-500 uppercase font-bold mt-3 tracking-wider"
            >
                Automation
            </p>
            <p class="text-4xl font-black text-primary">95%</p>
        </div>
    </div>

    <div class="space-y-16 md:space-y-24 pb-20">
        <section
            class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center py-10 px-4 md:px-12 bg-slate-50/50 rounded-3xl border border-slate-100"
        >
            <div class="space-y-6 md:space-y-8 order-2 md:order-1">
                <div class="space-y-3">
                    <p
                        class="text-xs font-semibold uppercase tracking-widest text-primary/70"
                    >
                        Automated Testing & Validation
                    </p>
                    <h2
                        class="text-3xl md:text-5xl font-extrabold text-slate-950 tracking-tight leading-tight"
                    >
                        Wire Processing Excellence
                    </h2>
                </div>

                <p class="text-slate-600 text-lg md:text-xl leading-relaxed">
                    Our advanced facility features state-of-the-art
                    <strong class="font-semibold text-slate-900"
                        >Artos and Komax</strong
                    >
                    automated systems, delivering unmatched precision.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                    <div
                        class="p-5 bg-white rounded-xl border border-slate-100 shadow-sm flex items-start gap-4"
                    >
                        <div
                            class="flex-shrink-0 p-2 rounded-lg bg-primary/10 text-primary"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                ></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm">
                                Crimp Monitoring
                            </p>
                            <p class="text-xs text-slate-600">
                                Real-time quality checks.
                            </p>
                        </div>
                    </div>

                    <div
                        class="p-5 bg-white rounded-xl border border-slate-100 shadow-sm flex items-start gap-4"
                    >
                        <div
                            class="flex-shrink-0 p-2 rounded-lg bg-primary/10 text-primary"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                ></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm">
                                Marking & Coding
                            </p>
                            <p class="text-xs text-slate-600">
                                Precise inkjet identification.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative group order-1 md:order-2">
                <div
                    class="absolute -inset-4 bg-primary/10 rounded-3xl blur-2xl opacity-70"
                ></div>
                <div
                    class="relative overflow-hidden rounded-2xl shadow-xl bg-white border border-slate-100"
                >
                    <img
                        src="{{ asset('img/manufacturing/Tablero4.jpg') }}"
                        class="h-[300px] md:h-[500px] w-full object-cover transition duration-500 group-hover:scale-105"
                        alt="EDS Harness Testing"
                    />
                </div>
            </div>
        </section>

        <section
            class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center py-10 px-4"
        >
            <div class="relative group">
                <div
                    class="absolute -inset-4 bg-primary/5 rounded-3xl blur-2xl opacity-70"
                ></div>
                <div
                    class="relative overflow-hidden rounded-2xl shadow-xl border border-slate-100 bg-white"
                >
                    <img
                        src="{{ asset('img/manufacturing/moldeo.jpg') }}"
                        class="h-[300px] md:h-[450px] w-full object-cover transform group-hover:scale-105 transition duration-500"
                        alt="EDS Injection Molding"
                    />
                </div>
            </div>

            <div class="space-y-6 md:space-y-8 md:pl-4">
                <div class="space-y-3">
                    <p
                        class="text-xs font-bold uppercase tracking-widest text-primary/80"
                    >
                        Advanced Manufacturing
                    </p>
                    <h2
                        class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight"
                    >
                        Injection Molding
                    </h2>
                </div>

                <p class="text-slate-600 text-lg md:text-xl leading-relaxed">
                    High-volume precision molding with tight tolerances and
                    scientific process control for world-class quality.
                </p>

                <div class="grid grid-cols-2 gap-4 md:gap-6 pt-4">
                    <div
                        class="p-6 bg-slate-50 rounded-xl border border-slate-100 flex flex-col sm:flex-row items-center gap-3"
                    >
                        <p class="text-2xl md:text-3xl font-black text-primary">
                            15–500<span
                                class="text-xs block sm:inline ml-1 font-bold"
                                >Tons</span
                            >
                        </p>
                    </div>

                    <div
                        class="p-6 bg-slate-50 rounded-xl border border-slate-100 flex flex-col sm:flex-row items-center gap-3"
                    >
                        <p class="text-2xl md:text-3xl font-black text-primary">
                            24/7
                        </p>
                        <p
                            class="text-[10px] font-bold text-slate-400 uppercase"
                        >
                            Production
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="text-center space-y-8 py-16 md:py-24 border-t border-slate-100"
        >
            <h3 class="text-2xl md:text-3xl font-bold text-slate-900">
                Ready to scale your production?
            </h3>
            <p class="text-slate-600 max-w-xl mx-auto px-4">
                Our engineering and manufacturing teams are ready to optimize
                your supply chain and deliver high-performance solutions.
            </p>

            <div
                class="flex flex-col sm:flex-row justify-center items-center gap-6 mt-8"
            >
                <a
                    href="/contact"
                    class="w-full sm:w-auto bg-primary text-white px-10 py-4 rounded-xl font-bold hover:bg-primary/90 transition-all shadow-lg hover:scale-105 text-center"
                >
                    Request a Consultation
                </a>
                <a
                    href="mailto:sales@edsmanufacturing.com"
                    class="flex items-center gap-2 text-primary font-bold hover:underline"
                >
                    <span class="material-symbols-outlined">mail</span>
                    sales@edsmanufacturing.com
                </a>
            </div>
        </section>
    </div>
</div>

@endsection
