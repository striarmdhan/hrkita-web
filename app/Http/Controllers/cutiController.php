<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class cutiController extends Controller
{
    public function index(){
        $cutis = [
            ['tanggal' => '2025-05-01', 'jenis' => 'Cuti Tahunan', 'status' => 'Disetujui'],
            ['tanggal' => '2025-06-10', 'jenis' => 'Cuti Sakit',    'status' => 'Pending'],
        ];
        $user = Auth::user();
        
        if ($user instanceof \App\Models\user) {
            $profile = $user->profile();
            $mutasi = $user->mutasi();
        } else {
            $profile = null;
            $mutasi = null;
        }

        return view('cuti', [
            'user' => $user,
            'profile' => $profile,
            'mutasi' => $mutasi
        ],
        compact('cutis')
        );

        // return view('cuti',
        //  compact('cutis'));
    }
}
