<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>@yield('title', 'IdentiSIC')</title>
</head>

<body class="min-h-screen bg-gray-100 text-gray-800 flex flex-col">
    {{-- Navbar --}}
    <nav class="bg-white shadow-md/20 px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center w-32 md:w-38 justify-between">
                <div class="flex bg-transparent w-8 h-8 md:w-10 md:h-10 outline-1 outline-[#0C519D] rounded-full items-center justify-center">
                    <i class="fa-solid fa-user text-[#0C519D] text-lg"></i>
                </div>
                <div class="font-semibold text-black">
                    <h1 class="text-xs md:text-sm">Selamat Datang,</h1>
                    <h1 class="text-xs md:text-sm">{{ Auth::user()->nama ?? 'Pengguna' }}</h1>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-3 py-1 md:px-4 md:py-2 rounded-md font-semibold text-xs md:text-sm bg-transparent outline outline-offset-1 outline-red-600 text-red-600 hover:bg-red-600 hover:text-white transition delay-50">
                    Keluar <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </button>
            </form>
        </div>
    </nav>

    <div class="flex flex-1">
        {{-- Sidebar --}}
        <aside class="w-64 bg-gradient-to-b from-[#9CBDFD] from-0% to-[#3887FF] to-55% text-white p-5">
            <div class="text-2xl font-bold mb-10">
                <span class="text-white italic">Identi</span><span class="text-blue-200 not-italic">SIC</span>
            </div>
            <ul class="space-y-6">
                <li><a href="#" class="flex items-center gap-2 hover:text-blue-100"><i class="fa-solid fa-user"></i> Profiling</a></li>
                <li><a href="#" class="flex items-center gap-2 hover:text-blue-100"><i class="fa-solid fa-calendar-days"></i> Cuti</a></li>
                <li><a href="#" class="flex items-center gap-2 hover:text-blue-100"><i class="fa-solid fa-fingerprint"></i> Fingerprint</a></li>
                <li><a href="#" class="flex items-center gap-2 hover:text-blue-100"><i class="fa-solid fa-briefcase"></i> PPDS</a></li>
            </ul>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</body>

</html>
