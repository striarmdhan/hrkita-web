<template>
  <h2 class="text-2xl font-bold mb-6 text-black">Profil Pegawai</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
    <!-- FOTO + KONTAK -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center text-center space-y-4">
      <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden border border-gray-400">
        <img
          :src="'/foto_pegawai/' + data.foto_pegawai"
          alt="Foto Pegawai"
          class="w-full h-full object-cover"
        />
      </div>
      <div>
        <h3 class="text-lg font-bold text-black mb-1">{{ data.nama }}</h3>
        <p class="text-md text-[#0C519D]">{{ data.no_hp }}</p>
        <p class="text-sm text-gray-600">{{ data.email }}</p>
      </div>
    </div>

    <!-- INFORMASI UMUM -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold text-black mb-4">Informasi Umum</h3>
      <div class="text-sm divide-y divide-gray-300">
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Tempat Lahir:</span>
          <span class="text-black">{{ data.tmpt_lahir }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Jenis Kelamin:</span>
          <span class="text-black">{{ data.sex }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Tanggal Lahir:</span>
          <span class="text-black">{{ formatTanggal(data.tgl_lahir) }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Alamat:</span>
          <span class="text-black">{{ data.alamat }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Agama:</span>
          <span class="text-black">{{ data.agama }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Pendidikan:</span>
          <span class="text-black">{{ data.pendidikan }}</span>
        </div>
      </div>
    </div>

    <!-- INFORMASI PEKERJAAN -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold text-black mb-4">Informasi Pekerjaan</h3>
      <div class="text-sm divide-y divide-gray-300">
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Jabatan:</span>
          <span class="text-black">{{ data.jabatan }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Bagian:</span>
          <span class="text-black">{{ data.bagian }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Unit Kerja:</span>
          <span class="text-black">{{ data.unit }}</span>
        </div>
        <div class="grid grid-cols-2 gap-4 items-start py-2">
          <span class="font-medium text-gray-500">Tanggal Masuk:</span>
          <span class="text-black">{{ formatTanggal(data.tgl_masuk) }}</span>
        </div>
      </div>
    </div>

    <!-- TABS -->
    <div class="col-span-1 md:col-span-3 bg-white p-6 rounded-lg shadow">
      <div class="flex gap-2 mb-4">
        <button :class="activeTab === 'mutasi' ? activeClass : inactiveClass" @click="activeTab = 'mutasi'">Info Mutasi</button>
        <button :class="activeTab === 'golongan' ? activeClass : inactiveClass" @click="activeTab = 'golongan'">History Golongan</button>
        <button :class="activeTab === 'jabatan' ? activeClass : inactiveClass" @click="activeTab = 'jabatan'">History Jabatan</button>
      </div>

      <div v-if="activeTab === 'mutasi'" class="space-y-4">
        <div
          v-for="(item, index) in mutasi"
          :key="index"
          class="flex flex-col md:flex-row bg-[#E6F0FF] rounded-md shadow border-l-4"
          :style="{ borderColor: '#0C519D' }"
        >
          <div class="p-4 w-full md:w-1/4 border-b md:border-b-0 md:border-r border-gray-300">
            <div class="text-sm text-gray-500">Tanggal</div>
            <div class="font-semibold text-black">{{ formatTanggal(item.tgl_mutasi) }}</div>
          </div>
          <div class="p-4 w-full md:w-1/4 border-b md:border-b-0 md:border-r border-gray-300">
            <div class="text-sm text-gray-500">Dari Unit</div>
            <div class="text-black">{{ item.nm_unit_asal }}</div>
          </div>
          <div class="p-4 w-full md:w-1/4 border-b md:border-b-0 md:border-r border-gray-300">
            <div class="text-sm text-gray-500">Ke Unit</div>
            <div class="text-black">{{ item.nm_unit_tujuan }}</div>
          </div>
          <div class="p-4 w-full md:w-1/4">
            <div class="text-sm text-gray-500">Keterangan</div>
            <div class="text-black">{{ item.keterangan }}</div>
          </div>
        </div>
      </div>

      <div v-if="activeTab === 'golongan'" class="text-sm text-gray-600">
        <p>Data riwayat golongan akan ditampilkan di sini.</p>
      </div>

      <div v-if="activeTab === 'jabatan'" class="text-sm text-gray-600">
        <p>Data riwayat jabatan akan ditampilkan di sini.</p>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "ProfileTabs",
  props: {
    data: Object,
    mutasi: Array,
  },
  data() {
    return {
      activeTab: "mutasi",
      activeClass: "px-4 py-2 text-sm font-medium text-[#0C519D] border-b-2",
      inactiveClass:
        "px-4 py-2 text-sm font-medium text-gray-500 bg-transparent rounded-t-lg hover:bg-[#e7f0fa] transition-colors duration-200",
    };
  },
  methods: {
    formatTanggal(tgl) {
      const options = { year: "numeric", month: "long", day: "numeric" };
      return new Date(tgl).toLocaleDateString("id-ID", options);
    },
  },
};
</script>

<style scoped>
table th,
table td {
  white-space: nowrap;
}
</style>
