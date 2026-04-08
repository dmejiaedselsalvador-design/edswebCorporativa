@extends('layouts.app') @section('title', 'EDS | Quality') @section('content')

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
        class="bg-primary text-white p-12 rounded-2xl relative overflow-hidden"
    >
        <!-- Glow decorativo -->
        <div
            class="absolute -top-20 -right-20 w-72 h-72 bg-blue-400/20 blur-3xl rounded-full"
        ></div>
        <div
            class="absolute -bottom-20 -left-20 w-72 h-72 bg-cyan-300/10 blur-3xl rounded-full"
        ></div>

        <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
            <!-- TEXTO -->
            <div class="space-y-6">
                <h3 class="text-3xl font-black">Zero-Defect Performance</h3>

                <p class="text-slate-300 leading-relaxed">
                    Our continuous improvement strategy has significantly
                    reduced defect rates year over year, achieving world-class
                    performance levels measured in Parts Per Million (PPM).
                </p>

                <!-- KPI -->
                <div class="bg-white/10 backdrop-blur p-6 rounded-xl w-fit">
                    <p class="text-4xl font-black text-white">sin datos</p>
                    <p class="text-sm text-slate-300 uppercase tracking-wider">
                        Current Performance
                    </p>
                </div>
            </div>

            <!-- IMAGEN DE GRÁFICA -->
            <div class="relative group">
                <!-- marco premium -->
                <div
                    class="absolute inset-0 bg-white/10 rounded-xl blur-xl opacity-40 group-hover:opacity-60 transition"
                ></div>

                <div
                    class="relative bg-white/5 backdrop-blur rounded-xl p-4 shadow-2xl border border-white/10"
                >
                    <!-- etiqueta -->
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="text-xs uppercase tracking-widest text-slate-400"
                        >
                            Defect Rate (PPM)
                        </span>

                        <span
                            class="text-xs bg-cyan-300/20 text-cyan-200 px-3 py-1 rounded-full"
                        >
                            Continuous Improvement
                        </span>
                    </div>

                    <!-- IMAGEN -->
                    <img
                        src="{{ asset('img/home/card-3.jpg') }}"
                        alt="PPM Defect Rate Trend"
                        class="w-full h-[260px] object-contain rounded-lg bg-white p-2"
                    />
                </div>
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
