@extends('layouts.app') @section('title', 'EDS | About') @section('content')
<!-- Hero Section -->
<section
    class="relative h-[650px] flex items-center justify-center overflow-hidden"
>
    <!-- Video -->
    <video
        class="absolute inset-0 w-full h-full object-cover z-0"
        autoplay
        muted
        loop
        playsinline
    >
        <source src="{{ asset('img/IntroEDSPage.mp4') }}" type="video/mp4" />
    </video>

    <!-- Overlay más elegante -->
    <div
        class="absolute inset-0 bg-gradient-to-b from-[#0b2b4b]/80 via-[#0b2b4b]/70 to-[#0b2b4b]/90 z-10"
    ></div>

    <!-- Contenido -->
    <div class="relative z-20 text-center px-6 max-w-4xl">
        <h1 class="text-5xl md:text-6xl font-black text-white leading-tight">
            Global Engineering <br />
            <span class="text-blue-300">& Manufacturing Excellence</span>
        </h1>

        <p class="mt-6 text-lg text-blue-100 max-w-2xl mx-auto">
            Delivering high-performance wire harness solutions with precision,
            scalability, and zero-defect quality.
        </p>

        <!-- BOTONES (IMPORTANTE) -->
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a
                href="{{ route('web.contact') }}"
                class="bg-white text-primary px-8 py-3 rounded-lg font-bold hover:bg-slate-100 transition"
            >
                Contact an Agent
            </a>
        </div>
    </div>
</section>

<!-- Who We Are Section -->
<section class="py-20 bg-white dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2
                class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-4"
            >
                Who We Are
            </h2>
            <p
                class="text-lg text-slate-600 dark:text-slate-400 max-w-3xl mx-auto leading-relaxed"
            >
                EDS Manufacturing, Inc. is an IATF 16949 and ISO 9001 certified
                world-class supplier of electrical wire harnesses, battery
                cables, and electro-mechanical assemblies to the Automotive,
                Appliance, and Commercial Vehicle markets. From inception to
                completion, EDS has the resources and commitment to meet your
                electrical distribution needs.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-start">
            <div>
                <p
                    class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"
                >
                    EDS was founded in 1990 as a management buyout of a wire
                    harness and switch division of the Burroughs Corporation.
                    Since that time, EDS has seen organic growth totaling 9500%
                    through 2023, all with 0 long-term debt.
                </p>

                <h3
                    class="text-2xl font-bold text-primary dark:text-white mb-3"
                >
                    World-Class Quality Management Principles
                </h3>
                <p
                    class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"
                >
                    It is our goal to deliver products which meet the
                    established specifications of our customers, work towards
                    product excellence, and earn the respect of our customers
                    through the application of world-class quality management
                    principles.
                </p>

                <h3
                    class="text-2xl font-bold text-primary dark:text-white mb-3"
                >
                    High Quality, Low Cost Wire Harness Solutions
                </h3>
                <p
                    class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"
                >
                    EDS is one of the highest quality, lowest cost wire harness
                    companies in the world. Founded in 1990, EDS has a 'slow but
                    steady' growth strategy to ensure we never lose focus on the
                    customer. Our diverse range of clients has contributed to
                    our growth, regardless of economic conditions. Our success
                    can be directly attributed to earning our customers’ trust
                    through continued performance.
                </p>
            </div>

            <div>
                <h3
                    class="text-2xl font-bold text-primary dark:text-white mb-3"
                >
                    Competitive Pricing
                </h3>
                <p
                    class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"
                >
                    Competitive Pricing is often the first impression that draws
                    new potential customers to EDS.
                </p>

                <h3
                    class="text-2xl font-bold text-primary dark:text-white mb-3"
                >
                    24/7 Account Manager Support
                </h3>
                <p
                    class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"
                >
                    The sales department focuses its efforts on consistently
                    providing the best possible customer service. Every client
                    has a dedicated account manager who delivers responsive and
                    knowledgeable service.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50 dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-slate-900 dark:text-white">
                Our Team Strengths
            </h2>
            <p
                class="mt-4 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto"
            >
                Our people and expertise drive performance, quality, and
                reliability.
            </p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card -->
            <div class="group relative rounded-2xl overflow-hidden shadow-lg">
                <!-- Image -->
                <img
                    src="{{ asset('img\staff\jl.png') }}"
                    class="w-full h-64 object-cover group-hover:scale-110 transition duration-500"
                />

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                ></div>

                <!-- Content -->
                <div class="absolute bottom-0 p-6 text-white">
                    <h3 class="text-lg font-semibold">Bilingual Personnel</h3>
                    <p class="text-sm opacity-90 mt-2">
                        Our bilingual employees are focused on exceeding
                        customer expectations.
                    </p>
                </div>
            </div>

            <!-- Card -->
            <div class="group relative rounded-2xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('img\staff\re.png') }}"
                    class="w-full h-64 object-cover group-hover:scale-110 transition duration-500"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                ></div>
                <div class="absolute bottom-0 p-6 text-white">
                    <h3 class="text-lg font-semibold">Qualified Engineers</h3>
                    <p class="text-sm opacity-90 mt-2">
                        Improving your current manufacturing and assembly
                        process.
                    </p>
                </div>
            </div>

            <!-- Card -->
            <div class="group relative rounded-2xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('img\staff\ga.png') }}"
                    class="w-full h-64 object-cover group-hover:scale-110 transition duration-500"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                ></div>
                <div class="absolute bottom-0 p-6 text-white">
                    <h3 class="text-lg font-semibold">Leadership Team</h3>
                    <p class="text-sm opacity-90 mt-2">
                        Qualified personnel with leadership and commitment to
                        work with our customers.
                    </p>
                </div>
            </div>

            <!-- Card -->
            <div class="group relative rounded-2xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('img\staff\lc.png') }}"
                    class="w-full h-64 object-cover group-hover:scale-110 transition duration-500"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"
                ></div>
                <div class="absolute bottom-0 p-6 text-white">
                    <h3 class="text-lg font-semibold">On Time Delivery</h3>
                    <p class="text-sm opacity-90 mt-2">
                        A cornerstone of our reputation as a trustworthy and
                        dependable supplier.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company History & Mission -->
<section class="py-20 bg-white dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <span
                    class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest rounded-full mb-4"
                    >Our Legacy</span
                >
                <h2
                    class="text-3xl font-bold text-slate-900 dark:text-white mb-6"
                >
                    Founded in 1990, Built on Integrity
                </h2>
                <p
                    class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"
                >
                    For over three decades, EDS Manufacturing has been at the
                    forefront of the industrial sector. We began as a small
                    engineering firm and have evolved into a global
                    manufacturing powerhouse.
                </p>
                <p
                    class="text-slate-600 dark:text-slate-400 mb-8 leading-relaxed"
                >
                    Our journey is marked by a relentless pursuit of quality and
                    a commitment to our partners. We specialize in complex
                    engineering solutions that drive efficiency across the
                    automotive, aerospace, and energy sectors.
                </p>
                <div
                    class="bg-primary/5 p-8 rounded-xl border-l-4 border-primary"
                >
                    <h3
                        class="text-xl font-bold text-primary mb-3 flex items-center gap-2"
                    >
                        <span class="material-symbols-outlined">flag</span> Our
                        Mission
                    </h3>
                    <p class="italic text-slate-700 dark:text-slate-300">
                        "To provide world-class engineering and manufacturing
                        solutions through a commitment to quality, integrity,
                        and global collaboration, ensuring our partners achieve
                        their most ambitious goals."
                    </p>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img
                        alt="Engineers working at a desk"
                        class="w-full h-auto"
                        data-alt="Team of engineers collaborating on complex designs"
                        src="{{ asset('img\staff\staff.jpeg') }}"
                    />
                </div>
                <div
                    class="absolute -bottom-6 -left-6 bg-primary text-white p-8 rounded-xl hidden lg:block"
                >
                    <div class="text-4xl font-black mb-1">30+</div>
                    <div
                        class="text-sm font-medium uppercase tracking-widest opacity-80"
                    >
                        Years of Experience
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-16 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl md:text-5xl font-black mb-2">2,000+</div>
                <div
                    class="text-sm font-medium uppercase tracking-widest text-slate-300"
                >
                    Global Employees
                </div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-black mb-2">250k</div>
                <div
                    class="text-sm font-medium uppercase tracking-widest text-slate-300"
                >
                    Sq Ft of Facilities
                </div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-black mb-2">99.8%</div>
                <div
                    class="text-sm font-medium uppercase tracking-widest text-slate-300"
                >
                    Quality Rating
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Locations -->
<section class="py-24 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">
                Strategic Global Presence
            </h2>
            <p class="text-slate-500 max-w-2xl mx-auto">
                Operating across North America to deliver engineering excellence
                and cost-efficient manufacturing.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="group rounded-2xl overflow-hidden bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-2xl"
            >
                <div class="relative h-64 overflow-hidden">
                    <img
                        src="{{ asset('img/sites/nogales_hq.jpg') }}"
                        alt="EDS Nogales Corporate Headquarters"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"
                    ></div>
                </div>

                <div class="p-6">
                    <h3
                        class="text-xl font-bold text-slate-900 dark:text-white mb-2"
                    >
                        EDS Nogales
                    </h3>

                    <p class="text-sm text-slate-500 mb-4">
                        <strong>Corporate Leadership:</strong> Global
                        headquarters focused on strategic management, warehouse
                        operations, and global logistics.
                    </p>

                    <div
                        class="flex gap-2 flex-wrap text-xs text-primary font-semibold"
                    >
                        <span>Corporate</span>
                        <span>•</span>
                        <span>Management</span>
                        <span>•</span>
                        <span>Warehouse</span>
                    </div>
                </div>
            </div>

            <div
                class="group rounded-2xl overflow-hidden bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-2xl"
            >
                <div class="relative h-64 overflow-hidden">
                    <img
                        src="{{ asset('img/home/m3nogales-plant.jpeg') }}"
                        alt="M3 Nogales Engineering Plant"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"
                    ></div>
                </div>

                <div class="p-6">
                    <h3
                        class="text-xl font-bold text-slate-900 dark:text-white mb-2"
                    >
                        M3 Plant
                    </h3>

                    <p class="text-sm text-slate-500 mb-4">
                        <strong>Engineering & Production Hub:</strong>
                        Integrated facility focused on advanced engineering,
                        R&D, full-scale production, and operational quality.
                    </p>

                    <div
                        class="flex gap-2 flex-wrap text-xs text-primary font-semibold"
                    >
                        <span>Engineering</span>
                        <span>•</span>
                        <span>R&D</span>
                        <span>•</span>
                        <span>Production</span>
                        <span>•</span>
                        <span>Quality</span>
                        <span>•</span>
                        <span>Operations</span>
                    </div>
                </div>
            </div>

            <div
                class="group rounded-2xl overflow-hidden bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-2xl"
            >
                <div class="relative h-64 overflow-hidden">
                    <img
                        src="{{ asset('img/sites/magadalena_01.jpg') }}"
                        alt="Magdalena Manufacturing Plant"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"
                    ></div>
                </div>

                <div class="p-6">
                    <h3
                        class="text-xl font-bold text-slate-900 dark:text-white mb-2"
                    >
                        Magdalena
                    </h3>

                    <p class="text-sm text-slate-500 mb-4">
                        <strong>Engineering & Production Hub:</strong>
                        Integrated facility focused on advanced engineering,
                        R&D, full-scale production, and operational quality.
                    </p>

                    <div
                        class="flex gap-2 flex-wrap text-xs text-primary font-semibold"
                    >
                        <span>Engineering</span>
                        <span>•</span>
                        <span>R&D</span>
                        <span>•</span>
                        <span>Production</span>
                        <span>•</span>
                        <span>Quality</span>
                        <span>•</span>
                        <span>Operations</span>
                    </div>
                </div>
            </div>

            <div
                class="group rounded-2xl overflow-hidden bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 transition duration-500 hover:-translate-y-2 hover:shadow-2xl"
            >
                <div class="relative h-64 overflow-hidden">
                    <img
                        src="{{ asset('img/home/eds-salvador-plant.jpeg') }}"
                        alt="El Salvador specialized assembly plant"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"
                    ></div>
                </div>

                <div class="p-6">
                    <h3
                        class="text-xl font-bold text-slate-900 dark:text-white mb-2"
                    >
                        El Salvador
                    </h3>

                    <p class="text-sm text-slate-500 mb-4">
                        <strong>Specialized Assembly:</strong> High-efficiency
                        facility focused on wire harness assembly with skilled
                        workforce and quality validation.
                    </p>

                    <div
                        class="flex gap-2 flex-wrap text-xs text-primary font-semibold"
                    >
                        <span>Assembly</span>
                        <span>•</span>
                        <span>Quality</span>
                        <span>•</span>
                        <span>Operations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values CTA -->
<section class="py-20 bg-white dark:bg-background-dark overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="relative bg-primary rounded-3xl p-8 md:p-16 text-white text-center overflow-hidden"
        >
            <div
                class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-white/5 rounded-full blur-3xl"
            ></div>
            <div
                class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 bg-white/5 rounded-full blur-3xl"
            ></div>
            <h2 class="text-3xl md:text-4xl font-black mb-6">
                Ready to build the future together?
            </h2>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto mb-10">
                Join hundreds of industry leaders who trust EDS Manufacturing
                for their most critical components and engineering challenges.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a
                    href="{{ route('web.contact') }}"
                    class="inline-flex items-center justify-center px-8 py-3 rounded-xl font-bold text-white border-2 border-white/30 hover:bg-white hover:text-primary transition-all duration-300"
                >
                    Contact Us
                </a>
                <a
                    href="#"
                    class="inline-flex items-center bg-primary border-2 border-white/20 text-white rounded-xl font-bold hover:bg-primary/90 hover:border-white/40 transition-all shadow-lg overflow-hidden group"
                >
                    <div
                        class="relative w-28 h-20 overflow-hidden hidden sm:block border-r border-white/10"
                    >
                        <img
                            src="https://img.youtube.com/vi/khnlNTmZ9Pc/0.jpg"
                            alt="EDS Process Video"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />

                        <div
                            class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:bg-black/20 transition-colors"
                        >
                            <div
                                class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/50"
                            >
                                <i
                                    class="fa-solid fa-play text-white text-xs ml-0.5"
                                ></i>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 py-4 flex flex-col items-start">
                        <span
                            class="text-xs font-medium text-blue-300 uppercase tracking-wider mb-0.5"
                            >Industrial Process</span
                        >
                        <span class="text-lg uppercase">Watch the video</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
