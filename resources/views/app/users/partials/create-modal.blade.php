<div
    x-show="openModal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm p-4"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-cloak
>
    <div
        @click.away="openModal = false"
        class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden border border-slate-100 max-h-[90vh] flex flex-col"
    >
        <div class="bg-slate-50 px-8 py-6 border-b border-slate-100 flex justify-between items-center shrink-0">
            <h2 class="text-xl font-bold text-slate-800">Registrar Usuario</h2>
            <button @click="openModal = false" class="text-slate-400 hover:text-slate-600 font-bold text-xl">&times;</button>
        </div>

        <form action="{{ route('users.store') }}" method="POST" class="overflow-y-auto p-8 space-y-5 custom-scrollbar">
            @csrf

            <input type="hidden" name="active" value="1">

            <div class="space-y-4">
                <div>
                    <label class="block text-[11px] font-bold text-slate-400 uppercase mb-2 ml-1">Nombre</label>
                    <input type="text" name="name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition-all" required />
                </div>

                <div>
                    <label class="block text-[11px] font-bold text-slate-400 uppercase mb-2 ml-1">Email</label>
                    <input type="email" name="email" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition-all" required />
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <input type="password" name="password" placeholder="Clave" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-500/20" required />
                    <input type="password" name="password_confirmation" placeholder="Confirmar" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-500/20" required />
                </div>
            </div>

            <div class="pt-2">
                <label class="block text-[11px] font-bold text-slate-400 uppercase mb-2 ml-1">Asignar Roles</label>

                <div class="flex flex-wrap gap-2 p-3 bg-slate-50 border border-slate-200 rounded-xl min-h-[50px] items-center mb-3">
                    <template x-for="role in newRoles" :key="role">
                        <span class="flex items-center gap-1.5 px-3 py-1.5 bg-blue-600 text-white rounded-lg text-[10px] font-black uppercase shadow-md animate-in zoom-in duration-200">
                            <span x-text="role"></span>
                            <button type="button" @click="newRoles = newRoles.filter(r => r !== role)" class="hover:text-blue-200 transition-colors">
                                <span class="material-symbols-outlined text-[16px]">cancel</span>
                            </button>
                            <input type="hidden" name="roles[]" :value="role">
                        </span>
                    </template>

                    <span x-show="newRoles.length === 0" class="text-slate-400 text-xs italic ml-1">
                        Debe seleccionar al menos un rol...
                    </span>
                </div>

                <div class="relative">
                    <select
                        x-on:change="
                            let val = $event.target.value;
                            if(val && !newRoles.includes(val)) {
                                newRoles.push(val);
                            }
                            $event.target.value = '';
                        "
                        class="w-full pl-4 pr-10 py-3 bg-white border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 appearance-none shadow-sm cursor-pointer hover:border-slate-300 transition-all"
                    >
                        <option value="" disabled selected>+ Seleccionar Rol</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                        @endforeach
                    </select>
                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                        add_circle
                    </span>
                </div>
            </div>

            <div class="flex gap-3 pt-6 sticky bottom-0 bg-white">
                <button type="button" @click="openModal = false; newRoles = []" class="flex-1 py-3 text-slate-500 font-bold hover:bg-slate-50 rounded-xl transition-colors">
                    Cancelar
                </button>
                <button type="submit" class="flex-1 py-3 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all transform active:scale-95">
                    Guardar Usuario
                </button>
            </div>
        </form>
    </div>
</div>
