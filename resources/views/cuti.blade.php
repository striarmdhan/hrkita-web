@extends('layouts.app')

@section('title', 'CutiKita')

@section('content')
<h1 class="text-2xl font-bold mb-6">Riwayat Cuti</h1>

<div class="bg-white rounded-lg shadow p-6">
    <table class="w-full table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left">Tanggal</th>
                <th class="px-4 py-2 text-left">Jenis Cuti</th>
                <th class="px-4 py-2 text-left">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cutis as $cuti)
            <tr class="border-b">
                <td class="px-4 py-2">{{ $cuti['tanggal'] }}</td>
                <td class="px-4 py-2">{{ $cuti['jenis'] }}</td>
                <td class="px-4 py-2">
                    <span class="px-2 py-1 rounded-full text-sm 
                        {{ $cuti['status']=='Disetujui' ? 'bg-green-100 text-green-800' :
                        ($cuti['status']=='Pending' ? 'bg-yellow-100 text-yellow-800' :
                        'bg-red-100 text-red-800') }}">
                        {{ $cuti['status'] }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
