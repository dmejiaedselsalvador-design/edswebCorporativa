@extends('layouts.app') @section('title', 'EDS | Quality') @section('content')

<style>
    @keyframes bounce-slow {
        0%,
        100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    .animate-bounce-slow {
        animation: bounce-slow 4s ease-in-out infinite;
    }
</style>

<!-- HERO (ALINEADO CON ENGINEERING / MANUFACTURING) -->
<section class="relative overflow-hidden bg-primary py-20 lg:py-32">
    <!-- BACKGROUND -->
    <div class="absolute inset-0">
        <img
            src="{{ asset('img/uscar21/pull tester.png') }}"
            class="w-full h-full object-cover object-[70%_center] scale-110 brightness-75 contrast-110"
        />

        <!-- OVERLAY -->
        <div
            class="absolute inset-0 bg-gradient-to-r from-[#0b2b4b]/85 via-[#0b2b4b]/60 to-transparent"
        ></div>

        <!-- GLOW -->
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
    <div class="container mx-auto max-w-[1280px] px-6 lg:px-10 relative z-10">
        <!--  AQUI CAMBIO A GRID -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- TEXTO -->
            <div class="max-w-[600px]">
                <span
                    class="inline-block bg-white/10 px-4 py-1 text-sm text-white rounded-full mb-6 backdrop-blur"
                >
                    Certified Quality Systems
                </span>

                <h1
                    class="text-4xl md:text-6xl font-black text-white leading-tight"
                >
                    Quality Engineering <br />
                    <span class="text-blue-300">& Validation</span>
                </h1>

                <p class="mt-6 text-lg text-blue-100">
                    Advanced testing, validation, and compliance processes
                    ensuring zero-defect performance across automotive and
                    industrial applications.
                </p>
            </div>

            <!-- IMAGEN EXTRA -->
            <div class="relative hidden md:block">
                <!-- glow suave -->
                <div
                    class="absolute inset-0 bg-white/10 blur-2xl rounded-xl opacity-40"
                ></div>

                <!-- imagen -->
                <img
                    src="{{ asset('img\uscar21\visualInspection.png') }}"
                    alt="Quality Testing Equipment"
                    class="relative rounded-xl shadow-2xl border border-white/10 w-full h-[320px] object-cover"
                />
            </div>
        </div>
    </div>
</section>

<!-- CONTENT -->
<div class="px-4 md:px-20 py-20 space-y-24">
    <!-- CERTIFICATIONS -->
    <section class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-black text-primary mb-6">
                Global Certifications
            </h2>

            <p class="text-slate-600 text-lg mb-6">
                Our Quality Management System is aligned with the most demanding
                global automotive and industrial standards.
            </p>

            <ul class="space-y-3 text-slate-600">
                <li>• IATF 16949: Automotive Quality Management</li>
                <li>• ISO 9001: Certified Quality Systems</li>
                <li>• Continuous improvement & traceability</li>
            </ul>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <img
                src="{{ asset('img\home\IATF.png') }}"
                class="rounded-xl shadow-xl object-contain h-32 w-auto mx-auto mb-6"
            />
            <img
                src="{{ asset('img/home/iso-17025-1.png') }}"
                class="rounded-xl shadow-xl object-contain h-32 w-auto mx-auto mb-6"
            />
        </div>
    </section>

    <!-- USCAR VALIDATION -->
    <section class="grid md:grid-cols-2 gap-12 items-center">
        <!-- TEXTO -->
        <div>
            <h2 class="text-3xl font-black text-primary mb-6">
                USCAR Validation Standards
            </h2>

            <p class="text-slate-600 text-lg mb-6">
                Full compliance testing and validation according to automotive
                industry standards including:
            </p>

            <ul class="space-y-3 text-slate-600">
                <li>• USCAR-21: Cable-to-terminal electrical performance</li>
                <li>• USCAR-38: High-voltage connector systems</li>
                <li>• USCAR-45: Sealed connector validation</li>
            </ul>

            <p class="text-slate-600 mt-6">
                Our validation ensures reliability under extreme environmental,
                mechanical, and electrical conditions.
            </p>
        </div>

        <!-- IMAGENES -->
        <div class="grid grid-cols-2 gap-4">
            <img
                src="{{ asset('img/quality/cross.png') }}"
                class="rounded-xl shadow-xl object-contain h-32 w-auto mx-auto mb-6"
            />

            <img
                src="{{ asset('img/manufacturing/team3.jpg') }}"
                class="rounded-xl shadow-xl object-contain h-32 w-auto mx-auto mb-6"
            />
        </div>
    </section>

    <!-- TESTING -->
    <section>
        <div class="text-center mb-12">
            <h2 class="text-3xl font-black text-primary">
                Advanced Electrical Testing
            </h2>
            <p class="text-slate-600 mt-2">
                Precision validation through automated and high-voltage testing
                systems
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- DYNALAB -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold mb-2 text-primary">Dynalab Testers</h3>
                <p class="text-sm text-slate-600">
                    Automated wire harness verification systems ensuring
                    continuity, resistance, and fault detection.
                </p>
            </div>

            <!-- HIPOT -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold mb-2 text-primary">High-Pot Testing</h3>
                <p class="text-sm text-slate-600">
                    Insulation resistance and dielectric withstand testing for
                    high-voltage applications.
                </p>
            </div>

            <!-- CRIMP -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold mb-2 text-primary">Crimp Analysis</h3>
                <p class="text-sm text-slate-600">
                    Cross-section analysis to validate mechanical integrity and
                    compression ratios.
                </p>
            </div>
        </div>
    </section>

    <!-- ZERO DEFECT + PPM (CON IMAGEN REAL) -->
    <section
        class="bg-[#0b1629] text-white p-8 md:p-16 rounded-[2.5rem] relative overflow-hidden my-20 border border-white/5 shadow-2xl"
    >
        <div
            class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/20 blur-[120px] rounded-full"
        ></div>
        <div
            class="absolute -bottom-24 -left-24 w-96 h-96 bg-cyan-500/10 blur-[120px] rounded-full"
        ></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10 pointer-events-none"
        ></div>

        <div
            class="relative z-10 grid lg:grid-cols-2 gap-12 lg:gap-20 items-center"
        >
            <div class="space-y-10">
                <div class="space-y-6">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold uppercase tracking-widest"
                    >
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"
                            ></span>
                            <span
                                class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"
                            ></span>
                        </span>
                        World-Class Excellence
                    </div>

                    <h3
                        class="text-4xl md:text-5xl font-black leading-tight italic tracking-tighter"
                    >
                        PRECISION <br />
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300"
                            >WITHOUT LIMITS.</span
                        >
                    </h3>

                    <p class="text-slate-400 text-lg leading-relaxed">
                        Our performance isn't just a goal; it's a mathematical
                        reality. Operating at
                        <span class="text-white font-bold"
                            >99.9995% efficiency</span
                        >, we are pushing the boundaries of
                        <span
                            class="text-blue-400 underline decoration-blue-500/30 underline-offset-4 font-bold"
                            >Six Sigma standards</span
                        >
                        to ensure every component is flawless.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div
                        class="bg-white/5 backdrop-blur-sm p-5 rounded-2xl border border-white/10 group hover:border-blue-500/50 transition duration-500"
                    >
                        <p
                            class="text-xs text-slate-500 uppercase font-bold tracking-tighter mb-1"
                        >
                            Global Quality
                        </p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-black">100%</span>
                            <span class="text-blue-400 text-sm font-bold italic"
                                >QPR</span
                            >
                        </div>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-sm p-5 rounded-2xl border border-white/10 group hover:border-cyan-500/50 transition duration-500"
                    >
                        <p
                            class="text-xs text-slate-500 uppercase font-bold tracking-tighter mb-1"
                        >
                            Defect Rate
                        </p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-black text-cyan-400"
                                >4.6</span
                            >
                            <span
                                class="text-slate-500 text-sm font-bold italic font-mono"
                                >PPM</span
                            >
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative group">
                <div
                    class="absolute -inset-4 bg-blue-500/5 rounded-[2rem] blur-2xl group-hover:bg-blue-500/10 transition duration-700"
                ></div>

                <div
                    class="relative bg-[#050b18] border border-white/10 rounded-3xl p-4 shadow-2xl overflow-hidden group-hover:border-blue-500/30 transition duration-500"
                >
                    <div
                        class="flex justify-between items-center mb-4 px-2 text-[10px] font-mono text-blue-500/50 tracking-widest uppercase"
                    >
                        <div class="flex gap-1.5">
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-red-500/20"
                            ></div>
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-amber-500/20"
                            ></div>
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-green-500/20"
                            ></div>
                        </div>
                        <span>Quality_Control_Unit_04</span>
                    </div>

                    <div
                        class="rounded-xl overflow-hidden bg-white/5 border border-white/5 group-hover:scale-[1.01] transition duration-700"
                    >
                        <img
                            src="{{ asset('img/quality/ppms_magdalena.png') }}"
                            alt="Quality Performance Dashboard"
                            class="w-full h-auto brightness-95 contrast-110"
                        />
                    </div>

                    <div
                        class="mt-4 pt-4 border-t border-white/5 flex justify-between text-[10px] font-mono text-slate-500 uppercase tracking-tighter"
                    >
                        <span>SPC: Active</span>
                        <span class="text-blue-400">Sigma Level: 5.91</span>
                    </div>
                </div>

                <a
                    href="{{
                        asset(
                            'certs/newCerts/815666581-EDS-Magdalena-quality-GM.pdf'
                        )
                    }}"
                    target="_blank"
                    class="absolute -bottom-6 -left-6 bg-white/10 backdrop-blur-2xl border border-white/20 p-4 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.5)] flex items-center gap-4 group/badge transition-all duration-500 hover:border-blue-500/50 hover:-translate-y-2 z-20 cursor-pointer"
                >
                    <div class="relative">
                        <img
                            src="{{ asset('img/clients/generalMotor.png') }}"
                            class="h-10 w-auto brightness-200 group-hover/badge:scale-110 transition duration-500"
                            alt="GM"
                        />
                        <div
                            class="absolute -inset-2 bg-blue-500/20 blur-xl rounded-full opacity-0 group-hover/badge:opacity-100 transition"
                        ></div>
                    </div>

                    <div class="border-l border-white/10 pl-4">
                        <p
                            class="text-[10px] text-blue-400 font-black uppercase tracking-tighter"
                        >
                            Verified Audit
                        </p>
                        <p class="text-sm text-white font-bold">
                            Six Sigma Certified
                        </p>
                        <div
                            class="flex items-center gap-1 mt-1 text-[9px] text-slate-400 font-mono italic"
                        >
                            <span>Click to open report</span>
                            <svg
                                class="w-3 h-3 text-blue-500 animate-pulse"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                                ></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="text-center space-y-6 pt-16 border-t">
        <h3 class="text-2xl font-bold">
            Need certified validation for your project?
        </h3>

        <p class="text-slate-600 max-w-xl mx-auto">
            Contact our quality engineering team to ensure your product meets
            the highest automotive standards.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a
                href="/contact"
                class="bg-primary text-white px-8 py-3 rounded-lg font-bold hover:bg-primary/90 transition"
            >
                Contact Quality Team
            </a>

            <a
                href="mailto:sales@edsmanufacturing.com"
                class="text-primary font-bold hover:underline flex items-center gap-2"
            >
                <span class="material-symbols-outlined">mail</span>
                sales@edsmanufacturing.com
            </a>
        </div>
    </section>
</div>

@endsection
