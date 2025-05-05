@extends('layouts.app')

@section('content')
<div id="app">
    {{-- Komponen Vue --}}
    <profile-tabs 
        :data="{{ json_encode([
            'nama' => $profile->na_peg,
            'sex' => $profile->sex,
            'alamat' => $profile->alamat,
            'no_hp' => $profile->no_hp,
            'foto_pegawai' => $profile->foto_pegawai,
            'tgl_lahir' => $profile->tgl_lahir,
            'tmpt_lahir' => $profile->tmpt_lahir,
            'agama' => $profile->agama,
            'email' => $profile->NOTIF_EMAIL,
            'pendidikan' => $profile->pendidikan,

            'unit' => $profile->nm_unit,
            'jabatan' => $profile->nm_jab,
            'bagian' => $profile->nm_bagian ?? '-',
            'tgl_masuk' => $profile->tgl_masuk,
            'unit_kerja' => $profile->unit_kerja ?? '-',
        ]) }}"
        :mutasi="{{ json_encode($mutasi) }}"
    ></profile-tabs>
</div>
@endsection
