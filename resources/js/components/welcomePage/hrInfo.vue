<template>
    <section class="bg-gradient-to-t from-white from-80% to-[#E6F0FF] py-20 px-6 md:px-16" id="hrinfo">
        <h2 class="text-center text-xl md:text-2xl font-bold mb-6 text-[#0C519D]">
            Pengumuman Terbaru dari HR untuk Kita
        </h2>

        <div class="relative max-w-7xl mx-auto overflow-hidden">
            <!-- Tombol kiri -->
            <button
                @click="prev"
                class="absolute top-1/2 -translate-y-1/2 z-10 bg-white px-2 py-2 rounded-full shadow hover:bg-gray-100 left-0"
            >
                <i class="fas fa-chevron-left text-[#0C519D] text-xl md:text-2xl"></i>
            </button>

            <!-- Isi Konten -->
            <div class="flex justify-center items-center gap-4 md:gap-8 transition-all duration-500 ease-in-out rela">
                <div
                    v-for="(item, index) in displayItems"
                    :key="index"
                    :class="getCardClass(index)"
                    class="transition-transform duration-500 ease-in-out"
                >
                    <div
                        class="bg-[#E6F0FF] rounded-lg shadow text-center overflow-hidden p-4 md:px-6 md:py-5 
                        h-[200px] md:h-[260px] w-[160px] md:w-[280px] flex flex-col justify-start"
                    >
                        <h3 class="font-bold text-sm md:text-lg mb-1 md:mb-2">{{ item.date }}</h3>
                        <div class="text-start overflow-y-auto pr-1">
                            <p class="text-sm md:text-base text-black font-semibold">{{ item.title }}</p>
                            <p class="italic text-xs md:text-sm text-gray-700 font-normal">"{{ item.desc }}"</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol kanan -->
            <button
                @click="next"
                class="absolute top-1/2 -translate-y-1/2 z-10 bg-white px-2 py-2 rounded-full shadow hover:bg-gray-100 right-0"
            >
                <i class="fas fa-chevron-right text-[#0C519D] text-xl md:text-2xl"></i>
            </button>
        </div>
    </section>
</template>

<script>
    export default {
        name: "hrInfo",
        data() {
            return {
                currentIndex: 0,
                windowWidth: window.innerWidth,
                hrInfos: [
                    { date: "1 Mei", title: "Cuti Bersama", desc: "Cuti bersama memperingati Hari Buruh Nasional pada tanggal 1 Mei 2025." },
                    { date: "10 Mei", title: "Pelatihan", desc: "Pelatihan softskill untuk seluruh staf HRD." },
                    { date: "17 Mei", title: "Libur Nasional", desc: "Memperingati Hari Raya Waisak 2569 BE." },
                    { date: "25 Mei", title: "Cek kesehatan", desc: "Cek kesehatan rutin untuk semua karyawan." },
                    { date: "1 Juni", title: "Upacara", desc: "Upacara peringatan Hari Lahir Pancasila." },
                    { date: "5 Juni", title: "Seminar HR", desc: "Seminar pengembangan profesional HR." },
                ],
            };
        },
        computed: {
            displayItems() {
                const len = this.hrInfos.length;
                const isMobile = this.windowWidth < 768;
                const totalDisplay = isMobile ? 3 : 5;
                const offset = Math.floor(totalDisplay / 2);
                const items = [];

                for (let i = -offset; i <= offset; i++) {
                    const index = (this.currentIndex + i + len) % len;
                    items.push(this.hrInfos[index]);
                }

                return items;
            },
        },
        methods: {
            next() {
                this.currentIndex = (this.currentIndex + 1) % this.hrInfos.length;
            },
            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.hrInfos.length) % this.hrInfos.length;
            },
            getCardClass(index) {
                const middle = Math.floor(this.displayItems.length / 2);
                    if (index === middle) 
                        return "scale-110 opacity-100 z-10";
                    if (index === middle - 1 || index === middle + 1) 
                        return "scale-100 opacity-60 z-0";
                        return "scale-95 opacity-30 z-0 hidden md:block";
            },
            updateWindowWidth() {
                this.windowWidth = window.innerWidth;
            },
        },
        mounted() {
            window.addEventListener("resize", this.updateWindowWidth);
        },
        beforeUnmount() {
            window.removeEventListener("resize", this.updateWindowWidth);
        },
    };
</script>

<style scoped>

</style>
