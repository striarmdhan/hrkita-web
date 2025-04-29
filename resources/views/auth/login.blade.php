<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>Login</title>
</head>
<body class="min-h-screen text-gray-800 flex bg-[#E6F0FF] flex-col">
    {{-- NAVBAR --}}
    <nav class="bg-white shadow-md/20 px-20 py-4 flex">
        <div class="flex flex-auto items-center justify-center sm:items-stretch sm:justify-start">
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <a href="#" class="rounded-md bg-transparent outline-2 outline-[#0C519D] px-3 py-2 text-sm font-medium text-[#0C519D] hover:bg-blue-900 hover:text-white transition delay-50" aria-current="page">Dashboard</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:text-[#0C519D] transition delay-50">Features</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:text-[#0C519D] transition delay-50">HR Information</a>
                </div>
            </div>
        </div>
        <div class="flex flex-auto w-32 items-center justify-end md:mr-5">
            <i class="fa-solid fa-bars"></i>
        </div>    
    </nav>

    {{-- FORM CONTENT --}}
    <div class="flex justify-center">
        <div class="m-10 p-2 flex flex-col md:flex-row w-3xl max-h-100 bg-white rounded-[10px] overflow-hidden">
            {{-- LEFT SIDE --}}
            <div class="p-4 w-full max-h-100 bg-center bg-cover rounded-[10px] overflow-hidden" style="background-image: url({{ asset('images/bgcolor1.png') }})">
                <div>
                    {{-- <h1 class="font-bold text-2xl text-black">Satu <span class="text-red-500">Platform,</span></h1>
                    <h1 class="font-bold text-2xl text-black">Semua untuk <span class="text-[#0C519D]">Kita.</span></h1> --}}
                </div>
            </div>

            {{-- BG --}}
            <div class="m-2 flex w-xl p-4">
                <div class="p-3 flex flex-col justify-center">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-md font-bold text-red-600 md:text-lg">HR<span class="text-[#0C519D]">Kita.</span></h1>
                    </div>
                    <h2 class="text-3xl font-bold flex text-black mb-5">
                        Sign In.
                    </h2>
            
                    @if ($errors->any())
                        <div class="mb-4 text-sm text-red-600">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <div id="app">
                        <form method="POST" action="{{ route('login') }}" class="space-y-5">
                            @csrf
                            
                                {{-- Username --}}
                                <label for="username" class="font-medium text-xs">Username</label>
                                <div class="mb-1 mt-1">
                                    <input 
                                        type="text"
                                        placeholder="Username" 
                                        name="username" 
                                        class="w-72 text-sm px-4 py-1.5 border rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        value="{{ old('username') }}"
                                        required>
                                </div>
                                {{-- Password pakai Vue --}}
                                <show-password></show-password>
                            
                            <div class="flex mb-20 items-center justify-center">
                                <button type="submit" class="w-full bg-[#0C519D] hover:bg-blue-900 text-white font-semibold py-1.5 px-2 rounded-[10px] transition duration-200 text-sm">
                                    SIGN IN
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>




{{-- <body class="min-h-screen flex items-center justify-center md:justify-end bg-cover bg-center" style="background-image:url('{{ asset('images/kwsg-1.jpg') }}')"></body> --}}