<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index() {
      $users = User::with('roles')->latest()->paginate(10);
        $roles = Role::all();
        return view('app.users.index', compact('users', 'roles'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
              'roles'   => 'required|array|min:1',
        'roles.*' => 'exists:roles,name',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

  $user->syncRoles($request->roles);

        return redirect()->back()->with('success', 'Usuario creado exitosamente.');
    }
public function update(Request $request, User $user)
{
    // 1. Validaciones
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id, // Ignora el email del propio usuario
        'password' => 'nullable|min:8|confirmed', // Opcional
        'roles'   => 'required|array|min:1',
        'roles.*' => 'exists:roles,name',
        'is_active' => 'required|boolean',
    ]);

    // 2. Actualizar datos básicos
   $user->name = $request->name;
    $user->email = $request->email;
    $user->is_active = (bool) $request->is_active;

    // 3. Solo actualizar contraseña si se escribió algo
   if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

  $user->save();

    // 4. Sincronizar Roles (Spatie)
    $user->syncRoles($request->roles);

    return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
}
}
