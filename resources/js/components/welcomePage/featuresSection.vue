<template>
    <section
        ref="featuresSection"
    >
        <!-- Judul dengan animasi zoom -->
        <transition name="zoom-fade">
            <h2
                v-if="titleVisible"
                class="text-center text-2xl md:text-3xl font-bold text-[#0C519D] mb-12"
            >
                Fitur Yang Tersedia Untuk Membantu Aktivitas Kita
            </h2>
        </transition>

        <!-- Fitur list -->
        <div
            v-if="featuresVisible"
            class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto"
        >
            <div
                v-for="(fitur, index) in fiturList"
                :key="index"
                class="feature-box bg-white p-10 rounded-lg text-start text-[#0C519D] h-full border-b-4 border-[#0C159D] transform transition duration-300 hover:translate-y-[-5px] hover:shadow-xl ease-in-out"
                :class="[`delay-${index}`]"
            >
                <div
                    class="flex text-center items-center justify-center bg-[#E6F0FF] p-4 w-20 h-20 rounded-md mb-6"
                >
                    <i :class="`text-4xl ${fitur.icon}`"></i>
                </div>
                <h3 class="font-bold text-2xl">
                    {{ fitur.title }}<span class="text-red-500">Kita</span>
                </h3>
                <p class="text-lg text-gray-700 mt-2 mb-4">{{ fitur.desc }}</p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "featuresSection",
    data() {
        return {
            fiturList: [
                {
                    title: "Profil",
                    icon: "fas fa-id-badge",
                    desc: "Menampilkan data pribadi dan data kepegawaian pegawai.",
                },
                {
                    title: "Absen",
                    icon: "fas fa-calendar-check",
                    desc: "Riwayat absensi harian pegawai, termasuk lembur dan keterlambatan masuk.",
                },
                {
                    title: "Cuti",
                    icon: "fas fa-plane-departure",
                    desc: "Informasi saldo cuti, riwayat cuti, dan keterangan permohonan cuti pegawai.",
                },
                {
                    title: "Dinas",
                    icon: "fas fa-building",
                    desc: "Menampilkan SPPD untuk informasi tugas, tujuan, dan akomodasi pegawai.",
                },
            ],
            featuresVisible: false,
            titleVisible: false,
        };
    },
    mounted() {
        const observer = new IntersectionObserver(
            (entries) => {
                if (entries[0].isIntersecting) {
                    this.featuresVisible = true;
                    this.titleVisible = true;
                    observer.disconnect();
                }
            },
            {
                threshold: 0.9, // Memunculkan item ketika viewport menyentuh section
            }
        );
        observer.observe(this.$refs.featuresSection);
    },
};
</script>

<style scoped>
/* Animasi masuk fade-up */
.feature-box {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s ease forwards;
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Delay untuk setiap item */
.delay-0 {
    animation-delay: 0s;
}
.delay-1 {
    animation-delay: 0.7s;
}
.delay-2 {
    animation-delay: 1.4s;
}
.delay-3 {
    animation-delay: 2.1s;
}

/* Judul zoom animasi */
.zoom-fade-enter-active {
    transition: all 0.6s ease;
}
.zoom-fade-enter-from {
    opacity: 0;
    transform: scale(1.1);
}
</style>
