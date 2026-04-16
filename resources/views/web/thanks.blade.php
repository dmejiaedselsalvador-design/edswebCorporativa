@extends('layouts.app') @section('title', 'EDS | Thank You') @section('content')
<section
    class="min-h-screen flex items-center justify-center bg-gray-100 relative"
>
    <div class="absolute inset-0">
        <img
            src="{{ asset('img/quality/conveyorsEK.jpeg') }}"
            class="w-full h-full object-cover brightness-50"
        />
        <div class="absolute inset-0 bg-blue-900/40"></div>
    </div>

    <div
        class="relative z-10 w-full max-w-lg p-12 bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 text-center"
    >
        <div
            class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-green-500/20 rounded-full"
        >
            <svg
                class="w-10 h-10 text-green-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                    d="M5 13l4 4L19 7"
                ></path>
            </svg>
        </div>

        <h2 class="text-4xl font-extrabold text-white mb-4">Message Sent!</h2>
        <p class="text-white/90 text-lg mb-8">
            Thank you for reaching out. Your email has been successfully
            received, and an agent will contact you shortly.
        </p>

        <a
            href="{{ url('/') }}"
            class="inline-block px-8 py-3 rounded-2xl bg-white text-blue-900 font-bold hover:bg-gray-200 transition-all shadow-lg"
        >
            Back to Home
        </a>
    </div>
</section>
@endsection
