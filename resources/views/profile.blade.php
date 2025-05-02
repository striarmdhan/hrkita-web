@extends('layouts.app')

@section('content')
<div id="app">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Komponen Vue -->
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

                'unit' => $profile->nm_unit,
                'jabatan' => $profile->nm_jab,
                'bagian' => $profile->nm_bagian ?? '-',
                'tgl_masuk' => $profile->tgl_masuk,
                'unit_kerja' => $profile->unit_kerja ?? '-',

            ]) }}"
        
            :mutasi="{{ json_encode($mutasi) }}"
        ></profile-tabs>
    </div>
</div>
@endsection
