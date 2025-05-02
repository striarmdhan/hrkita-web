<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>HRKita.</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
        </style>
</head>
<body class="min-h-screen text-gray-800 flex bg-white flex-col">
    {{-- NAVBAR --}}
    <nav class="flex items-center justify-between bg-white px-6 md:px-16 py-4 shadow-lg">
        <h1 class="font-bold text-lg text-red-500">HR<span class="text-[#0C519D]">Kita.</span></h1>
        <div class="flex space-x-4">
            {{-- <a href="#features" class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:text-[#0C519D] transition delay-50">Features</a>
            <a href="#hrinfo" class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:text-[#0C519D] transition delay-50">HR Information</a> --}}
            <a href="{{ route('login') }}" class="border border-[#0C519D] text-[#0C519D] rounded-md px-4 py-2 text-sm font-medium hover:bg-[#0C519D] hover:text-white transition">
                Sign In
            </a>
        </div>
    </nav>

    {{-- CONTENT --}}
    <section class="flex flex-col md:flex-row items-center justify-between px-6 md:px-16 py-6 bg-white">
        {{-- LEFT TEXT --}}
        <div class="w-full md:w-1/2 mb-10 md:mb-0">
            <h1 class=" text-4xl md:text-6xl font-bold text-black leading-tight">
                Satu <span class="text-red-500">Platform,</span><br>
                Semua Untuk <span class="text-[#0C519D]">Kita.</span>
            </h1>
            <p class="mt-4 text-gray-600 text-lg md:text-xl">
                Kelola profil, cuti, dan absensi dengan lebih mudah, semua dalam <span class="text-red-500 font-bold">HR</span><span class="text-[#0C519D] font-bold">Kita.</span>
            </p>
            <a href="{{ route('login') }}" class="mt-6 inline-block border border-[#0C519D] text-[#0C519D] rounded-md px-6 py-2 text-sm font-bold hover:bg-[#0C519D] hover:text-white transition">
                Sign In
            </a>
        </div>

        {{-- RIGHT IMAGE --}}
        <div class="w-full md:w-2xl">
            <img src="{{ asset('images/landingpg.png') }}" alt="Landing Image" class="w-full h-auto">
        </div>
    </section>
    
    <!-- FITUR UNGGULAN -->
    <section class="bg-gradient-to-t from-[#E6F0FF] from-90%  to-white py-10 px-6 md:px-16" id="features">
        <h2 class="text-center text-2xl md:text-3xl font-bold text-[#0C519D] mb-10">Fitur Unggulan untuk Membantu Aktivitas Kita</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
            <div class="bg-white p-6 rounded-xl shadow text-start text-[#0C519D]">
                <div class="flex text-center items-center justify-center bg-[#E6F0FF] p-2 w-16 h-16 rounded-md mb-4">
                    <i class="fas fa-id-badge text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl">Profil<span class="text-red-500">Kita</span></h3>
                <p class="text-md text-gray-700 mt-2 mb-4">Menampilkan data pribadi dan data kepegawaian pegawai.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow text-start text-[#0C519D]">
                <div class="flex text-center items-center justify-center bg-[#E6F0FF] p-2 w-16 h-16 rounded-md mb-4">
                    <i class="fas fa-calendar-check text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl">Absen<span class="text-red-500">Kita</span></h3>
                <p class="text-md text-gray-700 mt-2 mb-4">Riwayat absensi harian pegawai, termasuk lembur dan keterlambatan masuk.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow text-start text-[#0C519D]">
                <div class="flex text-center items-center justify-center bg-[#E6F0FF] p-2 w-16 h-16 rounded-md mb-4">
                    <i class="fas fa-plane-departure text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl">Cuti<span class="text-red-500">Kita</span></h3>
                <p class="text-sm text-gray-700 mt-2 mb-4">Informasi saldo cuti, riwayat cuti, dan keterangan permohonan cuti pegawai.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow text-start text-[#0C519D]">
                <div class="flex text-center items-center justify-center bg-[#E6F0FF] p-2 w-16 h-16 rounded-md mb-4">
                    <i class="fas fa-building text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl">Dinas<span class="text-red-500">Kita</span></h3>
                <p class="text-sm text-gray-700 mt-2 mb-4">Menampilkan SPPD untuk informasi tugas, tujuan, dan akomodasi pegawai.</p>
            </div>
        </div>
    </section>

    <!-- PENGUMUMAN -->
    <section class="bg-gradient-to-t from-white from-80% to-[#E6F0FF] py-20 px-6 md:px-16" id="hrinfo">
        <h2 class="text-center text-xl md:text-2xl font-bold mb-6">Pengumuman Terbaru dari HR untuk Kita</h2>
        <div class="flex justify-center gap-6 flex-wrap">
            <div class="bg-[#E6F0FF] p-6 rounded-lg shadow w-72 text-center">
                <h3 class="font-bold text-lg mb-2">1 Mei 2025</h3>
                <div class="text-start">
                    <p class="text-md text-black font-semibold">Cuti Bersama</p>
                    <p class="italic text-md text-gray-700 font-normal">"Cuti bersama memperingati Hari Buruh Nasional pada tanggal 1 Mei 2025."</p>
                </div>
            </div>
            <div class="bg-[#E6F0FF] p-6 rounded-lg shadow w-72 text-center">
                <h3 class="font-bold text-lg mb-2">1 Mei 2025</h3>
                <div class="text-start">
                    <p class="text-md text-black font-semibold">Cuti Bersama</p>
                    <p class="italic text-md text-gray-700 font-normal">"Cuti bersama memperingati Hari Buruh Nasional pada tanggal 1 Mei 2025."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-white text-sm py-6 px-6 md:px-16 border-t mt-auto">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <p>Jl. Teuku Umar, Kec. Semen, Kab. Kediri<br>Dawatlahstan Indonesia, Kec. Kalibaru, Kab. Gresik</p>
                <p class="mt-1">(0321) 325091</p>
                <p>info@sic.co.id</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-[#0C519D]"><i class="fab fa-facebook-square text-2xl"></i></a>
                <a href="#" class="text-[#0C519D]"><i class="fab fa-twitter-square text-2xl"></i></a>
                <a href="#" class="text-[#0C519D]"><i class="fab fa-instagram text-2xl"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>