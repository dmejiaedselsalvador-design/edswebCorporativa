<div
    x-show="editModal"
    class="fixed inset-0 z-[999] flex items-center justify-center bg-slate-900/60 backdrop-blur-sm p-4"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-cloak
>
    <div
        @click.away="editModal = false"
        class="bg-white rounded-3xl shadow-2xl w-full max-w-md flex flex-col border border-slate-100 max-h-[90vh]"
    >
        <div class="bg-slate-50 px-8 py-5 border-b border-slate-100 flex justify-between items-center shrink-0">
            <div>
                <h2 class="text-xl font-bold text-slate-800">Editar Usuario</h2>
                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Actualizar credenciales</p>
            </div>
            <button @click="editModal = false" class="text-slate-400 hover:text-rose-500 transition-colors">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <form
            :action="'/eds-dashboard/users/' + editingUser.id"
            method="POST"
            class="flex flex-col overflow-hidden"
        >
            @csrf @method('PUT')

            <div class="p-8 overflow-y-auto space-y-5 custom-scrollbar">
                <div class="grid gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase mb-1.5 ml-1">Nombre Completo</label>
                        <input type="text" name="name" x-model="editingUser.name" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm" />
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase mb-1.5 ml-1">Correo Electrónico</label>
                        <input type="email" name="email" x-model="editingUser.email" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm" />
                    </div>
                </div>

                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                    <label class="block text-[11px] font-bold text-slate-400 uppercase mb-2 ml-1">Seguridad (Opcional)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="password" name="password" placeholder="Nueva clave" class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-lg outline-none text-sm" />
                        <input type="password" name="password_confirmation" placeholder="Confirmar" class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-lg outline-none text-sm" />
                    </div>
                </div>

            <div class="mb-4 text-left">
    <label class="block text-[11px] font-bold text-slate-400 uppercase mb-2 ml-1">
        Roles Asignados
    </label>

    <div class="flex flex-wrap gap-2 p-3 bg-slate-50 border border-slate-200 rounded-xl min-h-[45px]">
        <template x-for="role in editingUser.roles" :key="role">
            <span class="flex items-center gap-1 px-2 py-1 bg-blue-100 text-blue-700 rounded-lg text-[11px] font-bold uppercase">
                <span x-text="role"></span>
                <button type="button" @click="editingUser.roles = editingUser.roles.filter(r => r !== role)" class="hover:text-blue-900">
                    <span class="material-symbols-outlined text-[14px]">close</span>
                </button>
                <input type="hidden" name="roles[]" :value="role">
            </span>
        </template>

        <span x-show="editingUser.roles.length === 0" class="text-slate-400 text-xs italic">Sin roles asignados</span>
    </div>

    <div class="mt-2 relative">
        <select
            @change="if($event.target.value && !editingUser.roles.includes($event.target.value)) editingUser.roles.push($event.target.value); $event.target.value = ''"
            class="w-full pl-3 pr-10 py-2 bg-white border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500/20 appearance-none"
        >
            <option value="">+ Agregar otro rol...</option>
            @foreach($roles as $role)
                <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
            @endforeach
        </select>
        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">add</span>
    </div>
</div>

                <div class="p-4 rounded-2xl border-2 transition-all duration-300"
                     :class="editingUser.is_active ? 'bg-emerald-50/50 border-emerald-100' : 'bg-rose-50/50 border-rose-100'">
                    <input type="hidden" name="is_active" :value="editingUser.is_active ? 1 : 0">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]" :class="editingUser.is_active ? 'text-emerald-600' : 'text-rose-600'" x-text="editingUser.is_active ? 'check_circle' : 'unpublished'"></span>
                            <span class="font-bold text-xs" :class="editingUser.is_active ? 'text-emerald-700' : 'text-rose-700'" x-text="editingUser.is_active ? 'CUENTA ACTIVA' : 'CUENTA INACTIVA'"></span>
                        </div>
                        <button type="button" @click="editingUser.is_active = !editingUser.is_active" class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-tighter transition-all" :class="editingUser.is_active ? 'bg-rose-600 text-white shadow-rose-200' : 'bg-emerald-600 text-white shadow-emerald-200'">
                            <span x-text="editingUser.is_active ? 'Desactivar' : 'Activar'"></span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 border-t border-slate-100 flex gap-3 shrink-0">
                <button type="button" @click="editModal = false" class="flex-1 py-3 text-slate-500 font-bold text-sm hover:bg-slate-100 rounded-xl transition-colors">Cancelar</button>
                <button type="submit" class="flex-1 py-3 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all transform active:scale-95 text-sm">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #cbd5e1; }
</style>
