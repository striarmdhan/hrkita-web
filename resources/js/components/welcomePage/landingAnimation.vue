<template>
    <div class="w-full md:w-1/2 mb-10 md:mb-0">
        <!-- Judul -->
        <transition name="fade-up" appear>
            <h1 v-if="show" class="text-4xl md:text-6xl font-bold text-black leading-tight">
            Satu <span class="text-red-500">Platform,</span><br>
            Semua Untuk <span class="text-[#0C519D]">Kita.</span>
            </h1>
        </transition>

        <!-- Deskripsi -->
        <transition name="fade-up-delay" appear>
            <p v-if="show" class="mt-4 text-gray-600 text-lg md:text-xl">
            Kelola profil, cuti, dan absensi dengan lebih mudah, semua dalam 
            <span class="text-red-500 font-bold">HR</span><span class="text-[#0C519D] font-bold">Kita.</span>
            </p>
        </transition>
    </div>

        <transition name="zoom-in" appear>
            <div class="w-full md:w-2xl" v-if="show">
                <img :src="imageUrl" alt="Landing Image" class="w-full h-auto">
            </div>
        </transition>
</template>

<script>
    export default {
        name: 'landingAnimation',
        data() {
            return {
            show: false,
            imageUrl: '/images/landingpg.png',
            };
        },
        mounted() {
            this.show = true;
        }
    };
</script>

<style scoped>
    .fade-up-enter-active {
        transition: all 0.8s ease;
    }
    .fade-up-enter-from {
        opacity: 0;
        transform: translateY(40px);
    }
    .fade-up-delay-enter-active {
        transition: all 0.8s ease 0.3s; /* 0.3s delay */
    }
    .fade-up-delay-enter-from {
        opacity: 0;
        transform: translateY(40px);
    }
    .zoom-in-enter-active {
        transition: all 1.2s ease;
    }
    .zoom-in-enter-from {
        opacity: 0;
        transform: scale(1.1);
    }
</style>
