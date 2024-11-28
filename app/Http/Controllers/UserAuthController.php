<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    // Menampilkan Form Register
    public function showRegisterForm()
    {
        // Pastikan lokasi view sesuai
        return view('user.register');
    }

    // Menampilkan Form Login
    public function showLoginForm()
    {
        // Pastikan lokasi view sesuai
        return view('user.login');
    }

    // Proses Register
    public function register(Request $request)
    {
        // Validate request
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // Create new user
            $user = User::create([
                'name' => $request->username,  // Sesuaikan dengan field di database
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Log the user in
            Auth::login($user);

            return redirect()->route('user.home')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Registration failed: ' . $e->getMessage()]);}}


    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function settings()
    {
        return view('user.settings');
}

}