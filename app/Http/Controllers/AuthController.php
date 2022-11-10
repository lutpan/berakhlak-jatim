<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Facade;


class AuthController extends Controller
{

    public function index()
    {
        return view('main.auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // $credentials = $request->only('username', 'password');
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // dd($credentials);
        // dd($credentials);

        $data = User::where('username', $request->username)->first();

        // return json_encode($data->password);

        if ($data && Hash::check($request->password, $data->password)) {
            Auth::loginUsingId($data->id_user);
            // return json_encode(Auth::user());
            return redirect()->route('dashboard');
        }
        return back()->with('loginError', 'Username atau Password Salah.');
    }

    public function logout(Request $request)
    {

        // return Auth::user();
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
