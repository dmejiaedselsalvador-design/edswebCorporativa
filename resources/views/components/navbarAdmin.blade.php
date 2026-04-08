<aside
    class="fixed h-screen w-64 left-0 top-0 overflow-y-auto bg-[#0b2b4b] dark:bg-slate-950 shadow-[20px_0_50px_rgba(11,43,75,0.05)] flex flex-col h-full py-8 px-4 z-50"
>
    <div class="mb-10 px-2 flex items-center gap-3">
        <div>
            <h1 class="text-xl font-bold text-white tracking-tighter">
                EDS Manufacturing, Inc.
            </h1>
            <p
                class="text-[10px] text-tertiary-fixed-dim uppercase tracking-widest font-bold"
            >
                Administrative panel
            </p>
        </div>
    </div>
    <nav class="flex-1 space-y-1">
        @role(['admin', 'marketing'])
        <a
            class="text-slate-300/70 hover:text-white hover:bg-white/5 flex items-center px-4 py-3 gap-3 font-inter tracking-tight font-medium text-sm transition-all duration-200 ease-in-out"
            href="{{ route('products.index') }}"
        >
            <i
                class="fa-solid fa-cart-flatbed-suitcase"
                style="color: rgb(99, 230, 190)"
            ></i>
            <span>Component For Sales</span>
        </a>
        @endrole
    </nav>
    <div class="mt-auto pt-6 border-t border-white/10 space-y-1">
        @role('admin')
        <a
            class="text-slate-300/70 hover:text-white hover:bg-white/5 flex items-center px-4 py-3 gap-3 font-inter tracking-tight font-medium text-sm transition-all duration-200 ease-in-out"
            href="{{ route('users.index') }}"
        >
            <span class="material-symbols-outlined" data-icon="group"
                >group</span
            >
            <span>Usuarios</span>
        </a>
        @endrole
        <a
            class="text-slate-300/70 hover:text-white hover:bg-white/5 flex items-center px-4 py-3 gap-3 font-inter tracking-tight font-medium text-sm transition-all duration-200 ease-in-out"
            href="{{ route('logout') }}"
            onclick="
                event.preventDefault();
                document.getElementById('logout-form').submit();
            "
        >
            <span class="material-symbols-outlined" data-icon="logout"
                >logout</span
            >
            <span>Cerrar Sesión</span>
        </a>

        <form
            id="logout-form"
            action="{{ route('logout') }}"
            method="POST"
            class="hidden"
        >
            @csrf
        </form>
    </div>
</aside>
