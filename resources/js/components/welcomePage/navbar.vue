<!-- resources/js/components/navbar.vue -->
<template>
    <nav
        :class="[
        'fixed top-0 left-0 w-full z-50 transition-all duration-300',
        isScrolled ? 'bg-white shadow-lg' : 'bg-transparent'
        ]"
    >
        <div class="flex items-center justify-between px-6 md:px-16 py-4">
        <h1 class="font-bold text-xl md:text-2xl text-red-500">HR<span class="text-[#0C519D]">Kita.</span></h1>

        <!-- Hamburger Button -->
        <button @click="toggleMenu" class="md:hidden text-[#0C519D] focus:outline-none">
            <i :class="menuOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'" class="text-xl"></i>
        </button>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8 items-center justify-center">
            <a href="#features"
                class="text-md font-semibold text-gray-600 border-b-2 border-transparent hover:text-[#0C519D] hover:border-blue-500 transition-all duration-200 py-2">
                Fitur
            </a>
            <a href="#hrinfo"
                class="text-md font-semibold text-gray-600 border-b-2 border-transparent hover:text-[#0C519D] hover:border-blue-500 transition-all duration-200 py-2">
                Pengumuman
            </a>
            <a href="/login"
                class="border border-[#0C519D] text-[#0C519D] rounded-md px-4 py-2 text-md font-medium hover:bg-[#0C519D] hover:text-white transition-all duration-200">
                Sign In
            </a>
        </div>
        </div>

        <!-- Mobile Menu -->
        <transition
            enter-active-class="transition duration-300 ease-out"
            enter-from-class="transform opacity-0 translate-y-5"
            enter-to-class="transform opacity-100 translate-y-0"
            leave-active-class="transition duration-200 ease-in"
            leave-from-class="transform opacity-100 translate-y-0"
            leave-to-class="transform opacity-0 translate-y-5"
        >
            <div v-if="menuOpen" class="md:hidden absolute top-20 right-4 w-[min(90vw,10rem)] bg-white rounded-xl shadow-xl z-50 px-6 py-4 space-y-4">
                <a href="#features" @click="closeMenu" class="block py-2 text-gray-700 font-semibold hover:text-[#0C519D]">Fitur</a>
                <a href="#hrinfo" @click="closeMenu" class="block py-2 text-gray-700 font-semibold hover:text-[#0C519D]">Info HR</a>
                <a href="#" class="block border-t pt-0 py-0 space-y-0 font-bold text-2xl text-[#0C159D]"></a>
                <a href="/login" class="block py-2 font-bold text-gray-700 hover:text-[#0C159D] transition">Sign In</a>
            </div>
        </transition>
    </nav>
</template>

<script>
    export default {
        name: 'Navbar',
        data() {
            return {
            isScrolled: false,
            menuOpen: false,
            };
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll);
        },
        unmounted() {
            window.removeEventListener('scroll', this.handleScroll);
        },
        methods: {
            handleScroll() {
            this.isScrolled = window.scrollY > 50;
            },
            toggleMenu() {
            this.menuOpen = !this.menuOpen;
            }
        }
    };
</script>

<style>
html {
    scroll-behavior: smooth;
}
</style>
