<template>
    <transition name="fade">
        <button
            v-if="isVisible"
            @click="scrollToTop"
            class="fixed bottom-6 right-6 z-50 bg-[#0C519D] text-white p-3 rounded-full shadow-lg hover:bg-[#083c75] transition-all duration-300"
            aria-label="Kembali ke atas"
        >
            <i class="fas fa-arrow-up text-xl"></i>
        </button>
    </transition>
</template>

<script>
    export default {
        name: "scrollToTop",
        data() {
            return {
                isVisible: false,
            };
        },
        mounted() {
            window.addEventListener("scroll", this.checkScroll);
        },
        beforeUnmount() {
            window.removeEventListener("scroll", this.checkScroll);
        },
        methods: {
            checkScroll() {
                this.isVisible = window.scrollY > 400; // muncul setelah scroll 400px
            },
            scrollToTop() {
                const target = document.querySelector("#welcome");
                if (target) {
                    target.scrollIntoView({ behavior: "smooth" });
                }
            },
        },
    };
</script>

<style scoped>
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.3s ease;
    }
    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }
</style>
