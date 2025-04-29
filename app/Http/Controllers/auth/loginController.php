<?php

namespace App\Http\Controllers\auth;

use App\Models\user;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // $user = user::where('user_name', $request->username)->first();

        $result = DB::select('SELECT * FROM m_pass WHERE user_name = ? LIMIT 1', [
            $request->username
        ]);

        if (empty($result)) {
            return back()->withErrors([
                'username' => 'Username atau password salah',
            ]);
        }

        $user = (object) $result[0];
        $inputPassword = $request->password;

        if ($inputPassword === $user->pass) {
            // Update password meng-hash dgn model md5
            $hashed = md5($inputPassword);
            DB::update('UPDATE m_pass SET pass = ? WHERE id = ?', [$hashed, $user->id]);

            $authUser = \App\Models\user::find($user->id);
            Auth::login($authUser);
            return redirect()->intended('/profile');

        } elseif (md5($inputPassword) === $user->pass) {
            // Login kalau password sudah md5
            $authUser = \App\Models\user::find($user->id);
            Auth::login($authUser);
            return redirect()->intended('/profile');
        }
        
        // if ($inputPassword === $user->pass) {
        //     // Password belum di-hash, cocokkan langsung lalu update ke model md5
        //     $user->pass = md5($inputPassword);
        //     $user->save();

        //     Auth::login($user);
        //     return redirect()->intended('/profile');
        // } elseif (md5($inputPassword) === $user->pass) {
        //     // Password memang sudah hash model md5, cocokkan
        //     Auth::login($user);
        //     return redirect()->intended('/profile');
        // }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
