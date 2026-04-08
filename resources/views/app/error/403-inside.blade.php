@extends('layouts.dashboard') @section('content')
<div class="flex items-center justify-center min-h-[70vh] p-6">
    <div class="max-w-md w-full text-center relative">
        <div
            class="absolute -top-10 -left-10 w-32 h-32 bg-blue-500/5 rounded-full blur-3xl"
        ></div>
        <div
            class="absolute -bottom-10 -right-10 w-32 h-32 bg-indigo-500/5 rounded-full blur-3xl"
        ></div>

        <div
            class="mb-6 inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-white shadow-xl shadow-slate-200/50 border border-slate-100 relative overflow-hidden"
        >
            <div
                class="absolute inset-0 bg-gradient-to-br from-rose-500/5 to-transparent"
            ></div>
            <span
                class="material-symbols-outlined text-rose-500 text-4xl relative z-10"
            >
                lock_person
            </span>
        </div>

        <div class="relative z-10">
            <h1
                class="text-6xl font-black text-slate-200 mb-2 tracking-tighter select-none"
            >
                403
            </h1>
            <h2
                class="text-2xl font-extrabold text-slate-800 mb-3 tracking-tight"
            >
                Access Restricted
            </h2>
            <p class="text-slate-500 text-sm leading-relaxed mb-8 px-4">
                You do not have the required permissions to view the
                <b>Users Management</b> section. Please contact your supervisor
                if you believe this is a mistake.
            </p>

            <div
                class="flex flex-col sm:flex-row gap-3 justify-center items-center"
            >
                <a
                    href="{{ url()->previous() }}"
                    class="w-full sm:w-auto px-6 py-3 bg-white text-slate-600 font-bold rounded-xl border border-slate-200 hover:bg-slate-50 transition-all active:scale-95 text-sm"
                >
                    Go Back
                </a>
                <a
                    href="/eds-dashboard"
                    class="w-full sm:w-auto px-6 py-3 bg-slate-900 text-white font-bold rounded-xl shadow-lg shadow-slate-200 hover:bg-slate-800 transition-all active:scale-95 text-sm"
                >
                    Return to Home
                </a>
            </div>
        </div>

        <div class="mt-12 flex items-center justify-center gap-2 opacity-40">
            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
            <p
                class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em]"
            >
                Security Protocol Active
            </p>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
        </div>
    </div>
</div>
@endsection
