<template>
<div>
    <!-- Judul -->
    <h2 class="text-2xl font-bold mb-4 text-black">Profile Kita</h2>

    <!-- Foto -->
    <div class="flex mb-2">
        <div class="w-40 h-40 md:w-72 md:h-72 rounded-full overflow-hidden relative mx-auto mb-4 border">
            <img 
            :src="'/foto_pegawai/' + data.foto_pegawai" 
            alt="Foto Pegawai"
            class="absolute object-cover scale-300 top-[40%] left-[20%] w-full h-auto"
            />
        </div>
    </div>

    <!-- Tabs -->
    <div class="flex mb-6 space-x-4">
        <button
            :class="activeTab === 'pegawai' ? activeClass : inactiveClass"
            @click="activeTab = 'pegawai'"
        >
            Informasi Personal
        </button>
        <button
            :class="activeTab === 'mutasi' ? activeClass : inactiveClass"
            @click="activeTab = 'mutasi'"
        >
            Informasi Mutasi
        </button>
    </div>

        <!-- Konten -->
        <div v-if="activeTab === 'pegawai'">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 max-w-6xl md:w-6xl mx-auto">
                <!-- Informasi Personal -->
                <div>
                    <h2 class="text-lg font-semibold mb-4 text-black">Informasi <span class="text-red-500">Personal</span></h2>
                    <div class="divide-y rounded-md border overflow-hidden text-sm md:text-base mb-4">
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Nama</span>
                            <span>{{ data.nama }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Jenis Kelamin</span>
                            <span>{{ data.sex }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Tempat Lahir</span>
                            <span>{{ data.tmpt_lahir }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Tanggal Lahir</span>
                            <span>{{ formatTanggal(data.tgl_lahir) }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Agama</span>
                            <span>{{ data.agama }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Alamat</span>
                            <span>{{ data.alamat }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Nomor HP</span>
                            <span>{{ data.no_hp }}</span>
                        </div>
                    </div>
                </div>

                <!-- Informasi Pekerjaan -->
                <div>
                    <h2 class="text-lg font-semibold mb-4 text-black">Informasi <span class="text-red-500">Pekerjaan</span></h2>
                    <div class="divide-y rounded-md border overflow-hidden text-sm md:text-base mb-4">
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Unit Kerja</span>
                            <span>{{ data.unit }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Bagian</span>
                            <span>{{ data.bagian }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Jabatan</span>
                            <span>{{ data.jabatan }}</span>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 px-4 py-2 bg-white">
                            <span class="font-semibold">Tanggal Masuk</span>
                            <span>{{ data.tgl_masuk }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tab Mutasi -->
        <div v-else class="space-y-4 px-4">
            <h2 class="text-lg font-semibold text-black">Riwayat <span class="text-red-500">Mutasi</span></h2>

            <div v-if="mutasi.length > 0" class="overflow-x-auto w-full md:w-4xl">
                <table class="min-w-full bg-white border border-gray-200 text-sm md:text-base">
                    <thead class="bg-[#0C519D] text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">No</th>
                            <th class="px-4 py-2 text-left">Tanggal Mutasi</th>
                            <th class="px-4 py-2 text-left">Dari Unit</th>
                            <th class="px-4 py-2 text-left">Ke Unit</th>
                            <th class="px-4 py-2 text-left">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr 
                            v-for="(m, index) in mutasi" 
                            :key="index" 
                            class="border-t hover:bg-gray-50"
                        >
                            <td class="px-4 py-2">{{ index + 1 }}</td>
                            <td class="px-4 py-2">{{ formatTanggal(m.tgl_mutasi) }}</td>
                            <td class="px-4 py-2">{{ m.nm_unit_asal }}</td>
                            <td class="px-4 py-2">{{ m.nm_unit_tujuan }}</td>
                            <td class="px-4 py-2">{{ m.keterangan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div v-else class="text-gray-500">
                Tidak ada data mutasi.
            </div>
        </div>
</div>
</template>

<script>
    export default {
    name: 'ProfileTabs',
    props: {
        data: Object,
        mutasi: Array
    },
    data() {
        return {
            activeTab: 'pegawai',
            activeClass: 'px-4 py-2 text-xs md:text-sm font-medium text-white bg-[#0C519D] rounded-md',            inactiveClass: 'px-4 py-2 text-xs md:text-sm font-medium text-[#0C519D] border border-[#0C519D] rounded-md'
        };
        },
        methods: {
            formatTanggal(tgl) {
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                return new Date(tgl).toLocaleDateString('id-ID', options);
            }
        }
    };
</script>
