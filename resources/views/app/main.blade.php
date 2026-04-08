@extends('layouts.dashboard') @section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                Administrative Dashboard
            </h1>
            <p class="text-gray-500 text-sm">
                Bienvenido de nuevo,
                <span
                    class="font-semibold text-blue-600"
                    >{{ auth()->user()->name }}</span
                >.
            </p>
        </div>

        <div class="text-right hidden md:block">
            <p
                class="text-sm font-medium text-gray-400 uppercase tracking-wider"
            >
                Fecha de acceso
            </p>
            <p class="text-gray-700 font-bold">{{ date("d M, Y") }}</p>
        </div>
    </div>
</div>
@endsection
