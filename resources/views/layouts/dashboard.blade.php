<!DOCTYPE html>

<html class="light" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>EDS Manufacturing - Dashboard Administrativo</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            secondary: "#0058be",
                            "surface-dim": "#d8dadc",
                            "tertiary-fixed-dim": "#4cd7f6",
                            "on-tertiary-fixed": "#001f26",
                            "surface-tint": "#456083",
                            "on-secondary-fixed-variant": "#004395",
                            "on-error-container": "#93000a",
                            "surface-container-low": "#f2f4f6",
                            "on-tertiary": "#ffffff",
                            "on-background": "#191c1e",
                            "on-secondary-fixed": "#001a42",
                            "tertiary-fixed": "#acedff",
                            "on-error": "#ffffff",
                            "surface-variant": "#e0e3e5",
                            tertiary: "#00191f",
                            "on-surface": "#191c1e",
                            outline: "#74777f",
                            primary: "#00162e",
                            "surface-container-highest": "#e0e3e5",
                            "on-tertiary-fixed-variant": "#004e5c",
                            "on-secondary": "#ffffff",
                            "secondary-container": "#2170e4",
                            "primary-container": "#0b2b4b",
                            "inverse-on-surface": "#eff1f3",
                            "surface-container-lowest": "#ffffff",
                            "on-primary": "#ffffff",
                            "inverse-primary": "#adc8f0",
                            "error-container": "#ffdad6",
                            "on-tertiary-container": "#009fba",
                            "on-secondary-container": "#fefcff",
                            "secondary-fixed-dim": "#adc6ff",
                            "secondary-fixed": "#d8e2ff",
                            "outline-variant": "#c3c6cf",
                            "primary-fixed-dim": "#adc8f0",
                            background: "#f7f9fb",
                            surface: "#f7f9fb",
                            "tertiary-container": "#002f38",
                            "on-primary-fixed": "#001c38",
                            "on-primary-fixed-variant": "#2d486a",
                            "surface-container": "#eceef0",
                            "on-surface-variant": "#43474e",
                            "surface-container-high": "#e6e8ea",
                            "surface-bright": "#f7f9fb",
                            error: "#ba1a1a",
                            "inverse-surface": "#2d3133",
                            "primary-fixed": "#d3e4ff",
                            "on-primary-container": "#7893b8",
                        },
                        fontFamily: {
                            headline: ["Inter"],
                            body: ["Inter"],
                            label: ["Inter"],
                        },
                        borderRadius: {
                            DEFAULT: "0.25rem",
                            lg: "0.5rem",
                            xl: "0.75rem",
                            full: "9999px",
                        },
                    },
                },
            };
        </script>
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        <style>
            .material-symbols-outlined {
                font-variation-settings:
                    "FILL" 0,
                    "wght" 400,
                    "GRAD" 0,
                    "opsz" 24;
            }
            body {
                font-family: "Inter", sans-serif;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
    </head>
    <body class="bg-surface text-on-surface">
        <!-- SideNavBar -->
        <x-navbarAdmin />
        <!-- Main Canvas -->
        <main class="ml-64 min-h-screen flex flex-col pt-16">
            <!-- TopNavBar -->

            <header
                class="fixed top-0 right-0 w-[calc(100%-16rem)] z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md flex justify-between items-center px-8 h-16 transition-transform"
            >
                <div class="flex items-center gap-6"></div>
                <div class="flex items-center gap-4">
                    <div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
                    <div class="flex items-center gap-3 pl-2">
                        <div class="text-right">
                            <p class="text-xs font-bold text-primary">
                                {{ implode(', ', auth()->user()->getRoleNames()->toArray()) }}
                            </p>
                            <p
                                class="text-[10px] text-on-surface-variant font-medium uppercase tracking-tighter"
                            >
                                {{ auth()->user()->name }}
                            </p>
                        </div>
                        <img
                            alt="User Avatar"
                            class="w-10 h-10 rounded-lg object-cover ring-2 ring-secondary/10"
                            data-alt="close-up portrait of a professional male administrator in a modern office with natural light and soft focus background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuZA5kF30xkt-gL5AyJXf9V_BdJ-otZpwBjdrI2Au_IZ7XsEOsJQog38risLmxHavHDIrA61U1YGIENKaiBconEZamMXc9RujHfDPxj_65lH1St8tah1zshBRKg_Ado2bfDNw9xUOSvgqIU1ee3IekWZojdzgrdpYJe6bkdo4vCEgllmYZk9spUWFXuwlJFeqDLhxikcp546AC_GlShrC8VCvWZlU9GuzpipmKyY8veLxtI9_BqTEA95YMwC4hCwW596lr6GZMxZw"
                        />
                    </div>
                </div>
            </header>

            @yield('content')

            <!-- Footer -->
            <footer
                class="w-full py-6 mt-auto flex justify-between items-center px-12 bg-[#f2f4f6] dark:bg-slate-900 font-inter text-xs tracking-wide"
            >
                <span class="text-slate-500 dark:text-slate-400"
                    >© 2024 EDS Manufacturing. Todos los derechos
                    reservados.</span
                >
            </footer>
        </main>
    </body>
</html>
