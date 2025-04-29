<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        if ($user instanceof \App\Models\user) {
            $profile = $user->profile();
        } else {
            $profile = null;
        }

        return view('profile', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }
}
