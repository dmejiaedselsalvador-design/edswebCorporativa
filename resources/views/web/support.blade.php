@extends('layouts.app') @section('content')
<div class="bg-gray-50 min-h-screen pb-20">
    <div class="bg-gradient-to-r from-blue-800 to-indigo-700 py-20 shadow-lg">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl">
                <h1
                    class="text-4xl md:text-6xl font-extrabold text-white mb-4 tracking-tight"
                >
                    Support Center
                </h1>
                <p
                    class="text-blue-100 text-lg md:text-xl font-light max-w-2xl"
                >
                    Global Sales, Engineering and Corporate Resources for EDS
                    Manufacturing partners.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 -mt-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="space-y-6">
                <div
                    class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 transform hover:-translate-y-1 transition duration-300"
                >
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="bg-blue-600 p-3 rounded-2xl text-white shadow-blue-200 shadow-lg"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="font-bold text-gray-900 text-xl text-balance"
                            >
                                Global Headquarters
                            </h3>
                        </div>
                    </div>

                    <div class="space-y-4 text-gray-600">
                        <p class="leading-relaxed">
                            <span class="block font-semibold text-gray-900"
                                >Nogales Office</span
                            >
                            765 N. Target Range Rd.,<br />
                            Nogales, AZ 85621, USA
                        </p>

                        <div class="pt-4 border-t border-gray-100 space-y-3">
                            <div class="flex items-center gap-3">
                                <i class="icon-phone text-blue-600"></i>
                                <span class="text-sm"
                                    ><strong>Phone:</strong> (520)
                                    287-9711</span
                                >
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="icon-envelope text-blue-600"></i>
                                <span class="text-sm"
                                    ><strong>Email:</strong>
                                    sales@edsmanufacturing.com</span
                                >
                            </div>
                        </div>
                    </div>

                    <a
                        href="https://www.google.com/maps/dir/?api=1&destination=765+N+Target+Range+Rd+Nogales+AZ+85621"
                        target="_blank"
                        class="mt-6 flex items-center justify-center gap-2 w-full bg-gray-50 hover:bg-blue-50 text-blue-600 font-bold py-3 rounded-xl transition border border-dashed border-blue-200"
                    >
                        Get Directions
                    </a>
                </div>

                <div
                    class="bg-slate-900 rounded-3xl shadow-2xl p-8 text-white relative overflow-hidden group"
                >
                    <div class="relative z-10">
                        <h3 class="font-bold text-xl mb-2">Corporate E-Mail</h3>
                        <p class="text-slate-400 text-sm mb-6">
                            Internal access for EDS Corporate mail server.
                        </p>
                        <a
                            href="https://eds-2013mail.edsmanufacturing.com/"
                            target="_blank"
                            class="block text-center bg-white text-slate-900 hover:bg-blue-500 hover:text-white py-4 rounded-2xl font-bold transition-all shadow-lg active:scale-95"
                        >
                            Login to Webmail
                        </a>
                    </div>
                    <div
                        class="absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition duration-700"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-32 w-32"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>
                    </div>
                </div>

                <div
                    class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6"
                >
                    <h4
                        class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4"
                    >
                        Downloads
                    </h4>
                    <a
                        href="{{
                            asset(
                                'documents/EDS Terms and Conditions of Purchase Sept 2020.pdf'
                            )
                        }}"
                        class="flex items-center gap-3 p-3 rounded-2xl hover:bg-red-50 text-gray-700 hover:text-red-700 transition group border border-transparent hover:border-red-100"
                    >
                        <div
                            class="bg-red-100 p-2 rounded-lg text-red-600 group-hover:bg-red-200"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                                />
                            </svg>
                        </div>
                        <span class="text-sm font-bold uppercase tracking-tight"
                            >Terms & Conditions</span
                        >
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-6">
                <div
                    class="bg-white rounded-[2rem] shadow-xl border border-gray-100 overflow-hidden flex flex-col h-full"
                >
                    <div
                        class="p-8 border-b border-gray-50 flex flex-col md:flex-row md:items-center justify-between gap-4"
                    >
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">
                                Sales and Engineering Support
                            </h2>
                            <p class="text-gray-500 text-sm italic">
                                Providing world-class harness solutions across
                                North America.
                            </p>
                        </div>
                        <span
                            class="inline-flex items-center px-4 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-700 border border-blue-100 uppercase tracking-tighter"
                        >
                            Active Support
                        </span>
                    </div>

                    <div class="flex-1 relative min-h-[500px] bg-gray-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3419.664426550785!2d-110.95074212356525!3d31.341147555940026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86d69f046460338f%3A0xc3f1f31f50a463be!2s765%20N%20Target%20Range%20Rd%2C%20Nogales%2C%20AZ%2085621!5e0!3m2!1sen!2sus!4v1710000000000!5m2!1sen!2sus"
                            class="absolute inset-0 w-full h-full border-0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        >
                        </iframe>
                    </div>

                    <div class="p-6 bg-gray-50 text-center">
                        <p
                            class="text-xs text-gray-400 font-medium uppercase tracking-widest"
                        >
                            Strategic Location • Nogales Arizona Logistics Hub
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
