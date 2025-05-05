@extends('layouts.app')

@section('title', 'SPPD')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Daftar Surat Perintah Perjalanan Dinas</h1>
    <div class="grid grid-cols-3 gap-6">
        {{-- FOTO, NAMA, NO HP, EMAIL justify center items center --}}
        <div class="bg-red-500">01
            
        </div>

        {{-- INFORMASI GENERAL tempat lahir, sex, tanggal lahir, alamat, agama, pendidikan --}}
        <div class="bg-amber-300">02

        </div>

        {{-- INFORMASI PEKERJAAN  jabatan, bagian, unit, tgl masuk --}}
        <div class="bg-green-200">03
            
        </div>

        {{-- TABS MUTASI, HISTORY JABATAN, HISTORY GOLONGAN --}}
        <div class="col-span-3 bg-blue-300">04

        </div>
    </div>

    {{-- <div class="bg-white rounded-lg shadow p-6 overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">No. SPPD</th>
                    <th class="px-4 py-2 text-left">Tujuan</th>
                    <th class="px-4 py-2 text-left">Tanggal Berangkat</th>
                    <th class="px-4 py-2 text-left">Tanggal Kembali</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sppd as $item)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $item['no'] }}</td>
                    <td class="px-4 py-2">{{ $item['tujuan'] }}</td>
                    <td class="px-4 py-2">{{ $item['tgl_berangkat'] }}</td>
                    <td class="px-4 py-2">{{ $item['tgl_kembali'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
@endsection
