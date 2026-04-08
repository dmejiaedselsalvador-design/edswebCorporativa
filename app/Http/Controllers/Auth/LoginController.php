<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //  Mostrar vista login
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Login con username (name)
    public function login(Request $request)
    {
        // VALIDACIÓN
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // INTENTO DE LOGIN
        if (Auth::attempt([
            'name' => $request->name,
            'password' => $request->password,
        ])) {

            $user = Auth::user();

            //  VALIDAR SI ESTA DESACTIVADO
            if (!$user->is_active) {
                Auth::logout();

                return back()->withErrors([
                    'name' => 'Your account is disabled.'
                ])->withInput();
            }

            //  REGENERAR SESIÓN (seguridad)
            $request->session()->regenerate();



            // default
            return redirect('/eds-dashboard');
        }

        //  ERROR LOGIN
        return back()->withErrors([
            'name' => 'Invalid credentials'
        ])->withInput();
    }

    //  Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login/eds-dashboard');
    }
}
