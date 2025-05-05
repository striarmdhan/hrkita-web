<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>HRKita.</title>
</head>
<body class="min-h-screen text-gray-800 flex bg-white flex-col">
    <div id="app">
        {{-- NAVBAR --}}
        <navbar></navbar>
        <scroll-to-top></scroll-to-top>

        {{-- CONTENT #Welcome --}}
        <section class="flex flex-col md:flex-row items-center justify-between px-6 md:px-16 py-24 bg-white" id="welcome">
            <landing-animation></landing-animation>
        </section>
        
        {{-- CONTENT #Features --}}
        <section class="bg-gradient-to-t from-[#E6F0FF] from-90%  to-white py-10 min-h-screen flex flex-col justify-center px-6 md:px-16" id="features">
            <features-section></features-section>
        </section>

        {{-- CONTENT #InfoHR --}}
        <hr-info></hr-info>

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
    </div>
</body>
</html>