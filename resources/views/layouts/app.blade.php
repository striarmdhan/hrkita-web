<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>HRKita</title>
</head>
<body class="h-screen bg-gray-100 text-gray-800 flex flex-col">
    {{-- Navbar --}}
    <nav class="bg-white border-[#E3E8F3] border-b-2 px-6 md:px-12 py-4 w-full">
        <div class="flex justify-between items-center">
            <!-- Brand + Hamburger -->
            <div class="flex items-center gap-4">
                <!-- HAMBURGER UNTUK MOBILE -->
                <button
                    onclick="window.dispatchEvent(new Event('toggle-sidebar'))"
                    class="md:hidden text-[#0C519D] text-xl focus:outline-none"
                >
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!-- LOGO -->
                <h1 class="font-bold text-xl text-red-500">
                    HR<span class="text-[#0C519D]">Kita.</span>
                </h1>
            </div>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="flex items-center px-3 py-1 md:px-4 md:py-2 rounded-md font-semibold text-xs md:text-sm bg-transparent outline outline-offset-1 outline-red-600 text-red-600 hover:bg-red-600 hover:text-white transition delay-50">
                    <span class="md:hidden">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </span>
                    <span class="hidden md:inline-block">Keluar <i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                </button>
            </form>
        </div>
    </nav>

    <div id="app" class="flex h-screen overflow-hidden">
        {{-- Sidebar Vue --}}
        @php
            $userName = json_encode(Auth::user()->nama ?? 'pengguna');
            $routes = json_encode([
                "profile"     => route("profile"),
                "cuti"        => route("cuti"),
                "fingerprint" => route("fingerprint"),
                "sppd"        => route("sppd"),
            ]);
            $activeRoutes = json_encode([
                "profile"     => request()->routeIs("profile"),
                "cuti"        => request()->routeIs("cuti"),
                "fingerprint" => request()->routeIs("fingerprint"),
                "sppd"        => request()->routeIs("sppd"),
            ]);
        @endphp
        <sidebar
            :user="{{ json_encode([
                'nama' => $profile->na_peg,
                'no_peg' => $profile->no_peg,
                'foto' => $profile->foto_pegawai
            ]) }}"
            :routes="{{ $routes }}"
            :active-routes="{{ $activeRoutes }}"
        ></sidebar>

        {{-- Main Content --}}
        <main class="flex-1 p-8 bg-cover bg-center bg-gray-100 overflow-y-auto" style="background-image: url('images/lines.png')">
            @yield('content')
        </main>
    </div>
</body>
</html>
