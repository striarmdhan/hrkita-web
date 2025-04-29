@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Profil Pengguna</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Informasi Personal --}}
        <div class="bg-primary rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4 border-b pb-2">Informasi Personal</h2>
            <p><strong>Nama: {{ $profile->na_peg }}</strong></p>
            <p><strong>Alamat: {{ $profile->alamat }}</strong></p>
            <p><strong>No HP: {{ $profile->no_hp }}</strong></p>
            <p><strong>Tanggal Lahir: {{ $profile->tgl_lahir }}</strong></p>
            <p><strong>Tempat Lahir: {{ $profile->tmpt_lahir }}</strong></p>
            <p><strong>Agama: {{ $profile->agama }}</strong></p>
        </div>

        {{-- Informasi Pekerjaan --}}
        <div class="bg-primary rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4 border-b pb-2">Informasi Pekerjaan</h2>
            <p><strong>Tanggal Masuk: {{ $profile->tgl_masuk }} </strong></p>
        </div>
    </div>
@endsection
