<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fingerprintController extends Controller
{
    public function index()
    {
        // contoh data dummy
        $logs = [
            ['tanggal' => '2025-05-01 08:00', 'status' => 'Masuk'],
            ['tanggal' => '2025-05-01 17:00', 'status' => 'Pulang'],
            ['tanggal' => '2025-05-02 08:05', 'status' => 'Masuk'], 
            ['tanggal' => '2025-05-02 16:55', 'status' => 'Pulang'],
        ];

        return view('fingerprint', compact('logs'));
    }
}
