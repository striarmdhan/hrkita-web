@extends('layouts.app')

@section('title', 'Fingerprint')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Log Fingerprint</h1>

    <div class="bg-white rounded-lg shadow p-6 overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">Tanggal & Waktu</th>
                    <th class="px-4 py-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $log['tanggal'] }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded-full text-sm
                            {{ $log['status'] === 'Masuk' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $log['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
