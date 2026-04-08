@extends('layouts.dashboard')

@section('content')
<div class="p-6" x-data="{ openModal: false, editModal: false, editingUser: {}, newRoles: [] }">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Gestión de Usuarios</h1>
            <p class="text-sm text-slate-500 text-sm">Control de acceso y credenciales.</p>
        </div>
       <button
    @click="newRoles = []; openModal = true"
    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl font-bold shadow-lg transition flex items-center gap-2"
>
    <span class="material-symbols-outlined">person_add</span>
    Nuevo Usuario
</button>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden text-sm">
        <table class="w-full text-left">
            <thead class="bg-slate-50 border-b border-slate-200 text-[11px] font-bold text-slate-400 uppercase">
                <tr>
                    <th class="px-6 py-4">Usuario</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4 text-center">Estado</th>
                    <th class="px-6 py-4 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($users as $user)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-6 py-4 font-semibold text-slate-700">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-slate-500">{{ $user->email }}</td>
                    <td class="px-6 py-4 text-center">
                        <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase {{ $user->is_active ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700' }}">
                            {{ $user->is_active ? 'Activo' : 'Inactivo' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
     <button
    @click="
        editingUser = {{ json_encode($user) }};
        editingUser.is_active = {{ $user->is_active ? 'true' : 'false' }};
        {{-- ESTA LÍNEA ES LA CLAVE: Solo nombres --}}
        editingUser.roles = {{ json_encode($user->roles->pluck('name')) }};
        editModal = true;
    "
    class="..."
>
    <span class="material-symbols-outlined">edit</span>
</button>        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('app.users.partials.create-modal')
    @include('app.users.partials.edit-modal') </div>
@endsection
