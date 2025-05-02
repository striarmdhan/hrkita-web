<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cutiController extends Controller
{
    public function index(){
        $cutis = [
            ['tanggal' => '2025-05-01', 'jenis' => 'Cuti Tahunan', 'status' => 'Disetujui'],
            ['tanggal' => '2025-06-10', 'jenis' => 'Cuti Sakit',    'status' => 'Pending'],
        ];

        return view('cuti', compact('cutis'));
    }
}
