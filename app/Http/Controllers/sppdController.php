<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class sppdController extends Controller
{
    public function index()
    {
        // Contoh data dummy SPPD
        $sppd = [
            ['no' => 'SPPD/001/2025', 'tujuan' => 'Jakarta', 'tgl_berangkat' => '2025-05-10', 'tgl_kembali' => '2025-05-15'],
            ['no' => 'SPPD/002/2025', 'tujuan' => 'Surabaya', 'tgl_berangkat' => '2025-05-12', 'tgl_kembali' => '2025-05-14'],
            ['no' => 'SPPD/003/2025', 'tujuan' => 'Bali', 'tgl_berangkat' => '2025-06-01', 'tgl_kembali' => '2025-06-05'],
        ];

        $user = Auth::user();
        
        if ($user instanceof \App\Models\user) {
            $profile = $user->profile();
            $mutasi = $user->mutasi();
        } else {
            $profile = null;
            $mutasi = null;
        }

        return view('sppd', [
            'user' => $user,
            'profile' => $profile,
        ],
        compact('sppd'));
    }
}
