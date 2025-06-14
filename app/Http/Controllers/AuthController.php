<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //signup view
    public function showSignup()
    {
        return view('auth.signup');
    }

    //logic signup
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Buat profile default kosong
        Profile::create([
            'user_id'         => $user->id,
            'email'           => $user->email,
            'date_of_birth'   => now()->toDateString(),
        ]);

        return redirect()->route('signin')->with('success', 'Pendaftaran berhasil, silakan login untuk melanjutkan.');
    }

    //signin view
    public function showSignin()
    {
        return view('auth.signin');
    }

    //logic signin
    public function signin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', 'Selamat datang, ' . auth()->user()->name . '!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    //reset password view
    public function showReset()
    {
        return view('auth.reset-password');
    }

    //logic reset password
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:4',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan!']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/auth/signin')->with('status', 'Password berhasil direset. Silakan login dengan password baru Anda.');
    }

    //logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/dashboard');
    }
}
