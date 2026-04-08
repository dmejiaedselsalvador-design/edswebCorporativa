<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login | EDS Manufacturing</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "tertiary-container": "#002f38",
              "inverse-on-surface": "#eff1f3",
              "surface-variant": "#e0e3e5",
              "secondary": "#0058be",
              "primary-fixed": "#d3e4ff",
              "inverse-surface": "#2d3133",
              "surface-container": "#eceef0",
              "primary": "#00162e",
              "surface-tint": "#456083",
              "surface-container-lowest": "#ffffff",
              "surface-container-low": "#f2f4f6",
              "surface-container-high": "#e6e8ea",
              "tertiary-fixed-dim": "#4cd7f6",
              "primary-container": "#0b2b4b",
              "on-surface-variant": "#43474e",
              "on-primary-fixed-variant": "#2d486a",
              "surface-bright": "#f7f9fb",
              "on-background": "#191c1e",
              "on-tertiary": "#ffffff",
              "on-secondary-fixed": "#001a42",
              "on-primary-fixed": "#001c38",
              "tertiary-fixed": "#acedff",
              "on-error": "#ffffff",
              "on-tertiary-container": "#009fba",
              "secondary-fixed": "#d8e2ff",
              "surface-container-highest": "#e0e3e5",
              "outline-variant": "#c3c6cf",
              "on-secondary-fixed-variant": "#004395",
              "primary-fixed-dim": "#adc8f0",
              "secondary-container": "#2170e4",
              "outline": "#74777f",
              "on-tertiary-fixed-variant": "#004e5c",
              "inverse-primary": "#adc8f0",
              "surface-dim": "#d8dadc",
              "error": "#ba1a1a",
              "surface": "#f7f9fb",
              "on-secondary-container": "#fefcff",
              "on-error-container": "#93000a",
              "background": "#f7f9fb",
              "on-surface": "#191c1e",
              "tertiary": "#00191f",
              "on-tertiary-fixed": "#001f26",
              "secondary-fixed-dim": "#adc6ff",
              "on-primary": "#ffffff",
              "on-primary-container": "#7893b8",
              "on-secondary": "#ffffff",
              "error-container": "#ffdad6"
            },
            fontFamily: {
              "headline": ["Inter"],
              "body": ["Inter"],
              "label": ["Inter"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "1rem", "xl": "1.25rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .industrial-gradient {
            background: linear-gradient(135deg, #00162e 0%, #0b2b4b 100%);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface min-h-screen flex flex-col items-center justify-center relative overflow-hidden">
<!-- Background Texture/Visual -->
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 industrial-gradient opacity-5"></div>
<img class="w-full h-full object-cover opacity-40 mix-blend-overlay" data-alt="Modern high-tech manufacturing facility with blue atmospheric lighting, precision machinery in soft focus, and industrial engineering aesthetic" src="{{ asset('img/machine_wire_automatice/wire_automatice_10.jpeg')}}"/>
</div>
<!-- Top Navigation (Simplified for Transactional Page) -->
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-8 py-6">
  <div class="flex items-center gap-3">
                <img src="{{ asset('img/eds-manufacturing_logo.png') }}" class="h-12" alt="EDS">
                <span class="font-bold text-primary text-lg hidden sm:block">EDS Manufacturing, Inc.</span>
            </div>

</header>
<main class="z-10 w-full max-w-[440px] px-6">
<!-- Login Card -->
<div class="glass-panel rounded-xl shadow-[0_20px_50px_rgba(11,43,75,0.08)] p-10 flex flex-col gap-8 border border-white/20">
<!-- Branding/Greeting -->
<div class="flex flex-col gap-2">
<div class="flex items-center gap-3">
<div class=" items-center justify-center">
 <img src="{{ asset('img/eds-manufacturing_logo.png') }}" class="h-12" alt="EDS">
</div>
<h1 class="text-2xl font-bold tracking-tight text-primary">Login</h1>
</div>

</div>


<!-- Form -->
<form method="POST" action="{{ route('login.post') }}" class="flex flex-col gap-5">
    @csrf

    <!-- USERNAME -->
    <div class="flex flex-col gap-2">
        <label class="label-sm uppercase tracking-wider font-semibold text-on-surface-variant text-[10px]">
            Username
        </label>

        <div class="relative">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-lg">
                person
            </span>

            <input
                class="w-full pl-12 pr-4 py-3.5 bg-surface-container-high rounded-md focus:ring-2 focus:ring-secondary/30 transition text-sm outline-none"
                name="name"
                placeholder="Enter your username"
                type="text"
                required
            />
        </div>
    </div>

    <!-- PASSWORD -->
    <div class="flex flex-col gap-2">
        <label class="label-sm uppercase tracking-wider font-semibold text-on-surface-variant text-[10px]">
            Password
        </label>

        <div class="relative">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-lg">
                lock
            </span>

            <input
                class="w-full pl-12 pr-4 py-3.5 bg-surface-container-high rounded-md focus:ring-2 focus:ring-secondary/30 transition text-sm outline-none"
                name="password"
                type="password"
                placeholder="••••••••"
                required
            />
        </div>
    </div>

    <!-- BOTÓN REAL -->
    <button
        type="submit"
        class="mt-4 w-full py-4 bg-gradient-to-r from-secondary to-tertiary-container text-white font-bold rounded-md hover:brightness-110 active:scale-[0.98] transition-all shadow-lg shadow-secondary/20 flex items-center justify-center gap-2"
    >
        Sign In
        <span class="material-symbols-outlined text-lg">
            arrow_forward
        </span>
    </button>

    <!-- ERRORES -->
    @error('name')
        <div class="text-red-500 text-sm text-center">
            {{ $message }}
        </div>
    @enderror

    <!-- VOLVER -->
    <a href="{{ route('web.index') }}"
       class="mt-4 w-full py-4 border border-gray-300 text-gray-300 font-semibold rounded-md hover:bg-gray-700 hover:text-white transition-all flex items-center justify-center gap-2">
        Return to home
    </a>
</form>


</main>

</body></html>
