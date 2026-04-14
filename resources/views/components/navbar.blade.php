<nav class="hidden md:flex gap-6 font-medium items-center">
    <a
        href="{{ route('web.index') }}"
        class="text-sm font-medium transition-all px-3 py-1 rounded
       {{ request()->routeIs('web.index')
           ? 'bg-primary/20 text-primary font-bold border-b-2 border-primary scale-105'
           : 'text-slate-600 hover:text-primary hover:bg-primary/10 dark:text-slate-300 dark:hover:text-white dark:hover:bg-primary/20' }}"
    >
        Home
    </a>

    <!-- Dropdown: Solutions -->
    <div class="relative group">
        <button
            class="text-sm font-medium px-3 py-1 rounded flex items-center gap-1 text-slate-600 hover:text-primary hover:bg-primary/10 dark:text-slate-300 dark:hover:text-white dark:hover:bg-primary/20 transition-all"
        >
            Solutions
            <span class="material-symbols-outlined text-xs">expand_more</span>
        </button>
        <div
            class="absolute left-0 mt-2 w-48 bg-white dark:bg-slate-900 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all z-50"
        >
            <a
                href="{{ route('web.solutions') }}"
                class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg"
                >All Solutions</a
            >
            <a
                href="{{ route('web.engineering') }}"
                class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg"
                >Engineering</a
            >
            <a
                href="{{ route('web.manufacturing') }}"
                class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg"
                >Manufacturing</a
            >
        </div>
    </div>

    <a
        href="{{ route('web.quality') }}"
        class="text-sm font-medium transition-all px-3 py-1 rounded
       {{ request()->routeIs('web.quality')
           ? 'bg-primary/20 text-primary font-bold border-b-2 border-primary scale-105'
           : 'text-slate-600 hover:text-primary hover:bg-primary/10 dark:text-slate-300 dark:hover:text-white dark:hover:bg-primary/20' }}"
    >
        Quality
    </a>

    <a
        href="{{ route('web.support') }}"
        class="text-sm font-medium transition-all px-3 py-1 rounded
       {{ request()->routeIs('web.support')
           ? 'bg-primary/20 text-primary font-bold border-b-2 border-primary scale-105'
           : 'text-slate-600 hover:text-primary hover:bg-primary/10 dark:text-slate-300 dark:hover:text-white dark:hover:bg-primary/20' }}"
    >
        Support
    </a>

    <a
        href="{{ route('product.list') }}"
        class="text-sm font-medium transition-all px-3 py-1 rounded
       {{ request()->routeIs('product.list')
           ? 'bg-primary/20 text-primary font-bold border-b-2 border-primary scale-105'
           : 'text-slate-600 hover:text-primary hover:bg-primary/10 dark:text-slate-300 dark:hover:text-white dark:hover:bg-primary/20' }}"
    >
        Special Inventory
    </a>

    <a
        href="{{ route('web.about') }}"
        class="text-sm font-medium transition-all px-3 py-1 rounded
       {{ request()->routeIs('web.about')
           ? 'bg-primary/20 text-primary font-bold border-b-2 border-primary scale-105'
           : 'text-slate-600 hover:text-primary hover:bg-primary/10 dark:text-slate-300 dark:hover:text-white dark:hover:bg-primary/20' }}"
    >
        About Us
    </a>
</nav>
