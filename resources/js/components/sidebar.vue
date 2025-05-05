<template>
    <div>
        <!-- Desktop Sidebar -->
        <aside
            class="hidden md:flex flex-col w-64 h-screen bg-white px-4 py-6 border-r-2 border-[#E3E8F3]"
        >
            <div class="mb-6 flex items-center space-x-3 px-2 flex-shrink-0">
                <!-- Foto profil -->
                <div class="w-16 h-16 rounded-full overflow-hidden relative border border-gray-300">
                    <img
                        :src="'/foto_pegawai/' + user.foto"
                        alt="Foto User"
                        class="absolute object-cover scale-[2.0] top-[30%] left-[0%] w-full h-auto"
                    />
                </div>

                <!-- Info user -->
                <div class="flex-1 min-w-0">
                    <div class="text-sm font-semibold text-gray-800 break-words leading-tight">
                        {{ user.nama }}
                    </div>
                    <div class="text-xs text-gray-400">
                        {{ user.no_peg }}
                    </div>
                </div>
            </div>

            <!-- Garis -->
            <div class="border-t-2 mb-4 border-gray-300"></div>

            <ul class="space-y-4">
                <li>
                    <sidebar-item
                        icon="fa-id-card"
                        label="Profile"
                        highlighted-text="Kita"
                        :route="routes.profile"
                        :active="activeRoutes.profile"
                        :collapsed="false"
                    />
                </li>
                <li>
                    <sidebar-item
                        icon="fa-calendar-days"
                        label="Cuti"
                        highlighted-text="Kita"
                        :route="routes.cuti"
                        :active="activeRoutes.cuti"
                        :collapsed="false"
                    />
                </li>
                <li>
                    <sidebar-item
                        icon="fa-fingerprint"
                        label="Absen"
                        highlighted-text="Kita"
                        :route="routes.fingerprint"
                        :active="activeRoutes.fingerprint"
                        :collapsed="false"
                    />
                </li>
                <li>
                    <sidebar-item
                        icon="fa-briefcase"
                        label="Dinas"
                        highlighted-text="Kita"
                        :route="routes.sppd"
                        :active="activeRoutes.sppd"
                        :collapsed="false"
                    />
                </li>
            </ul>
        </aside>

        <!-- Mobile Sidebar as Transparent Overlay -->
        <transition name="slide">
            <div v-if="showMobileSidebar" class="fixed inset-0 z-10 flex md:hidden">
                <!-- Background klik luar -->
                <div
                    class="absolute inset-0"
                    @click="toggleMobileSidebar"
                ></div>

                <!-- Sidebar -->
                <aside
                    class="relative w-54 bg-white h-full px-4 py-6 shadow-lg"
                >
                    <div class="mb-6 flex items-center space-x-3 px-2 flex-shrink-0">
                        <!-- Foto profil -->
                        <div class="w-10 h-10 rounded-full overflow-hidden relative border border-gray-300">
                            <img
                                :src="'/foto_pegawai/' + user.foto"
                                alt="Foto User"
                                class="absolute object-cover scale-[2.0] top-[30%] left-[0%] w-full h-auto"
                            />
                        </div>

                        <!-- Info user -->
                        <div class="flex-1 min-w-0">
                            <div class="text-xs font-semibold text-gray-800">
                                {{ user.nama }}
                            </div>
                            <div class="text-xs text-gray-400">
                                {{ user.no_peg }}
                            </div>
                        </div>
                        <button @click="toggleMobileSidebar" class="text-[#0C519D] text-lg">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    
                    <div class="border-t-2 mb-4 border-gray-300"></div>

                    <ul class="space-y-4">
                        <li>
                            <sidebar-item
                                icon="fa-id-card"
                                label="Profile"
                                highlighted-text="Kita"
                                :route="routes.profile"
                                :active="activeRoutes.profile"
                                :collapsed="false"
                            />
                        </li>
                        <li>
                            <sidebar-item
                                icon="fa-calendar-days"
                                label="Cuti"
                                highlighted-text="Kita"
                                :route="routes.cuti"
                                :active="activeRoutes.cuti"
                                :collapsed="false"
                            />
                        </li>
                        <li>
                            <sidebar-item
                                icon="fa-fingerprint"
                                label="Absen"
                                highlighted-text="Kita"
                                :route="routes.fingerprint"
                                :active="activeRoutes.fingerprint"
                                :collapsed="false"
                            />
                        </li>
                        <li>
                            <sidebar-item
                                icon="fa-briefcase"
                                label="Dinas"
                                highlighted-text="Kita"
                                :route="routes.sppd"
                                :active="activeRoutes.sppd"
                                :collapsed="false"
                            />
                        </li>
                    </ul>
                </aside>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        name: 'Sidebar',
        props: {
            user: Object,
            routes: Object,
            activeRoutes: Object
        },
        data() {
            return {
                showMobileSidebar: sessionStorage.getItem('showMobileSidebar') === 'true'
            };
        },
        methods: {
            toggleMobileSidebar() {
                this.showMobileSidebar = !this.showMobileSidebar;
                sessionStorage.setItem('showMobileSidebar', this.showMobileSidebar);
            }
        },
        mounted() {
            window.addEventListener('toggle-sidebar', this.toggleMobileSidebar);
        },
        beforeUnmount() {
            window.removeEventListener('toggle-sidebar', this.toggleMobileSidebar);
        }
};
</script>

<style scoped>
    .slide-enter-active,
    .slide-leave-active {
        transition: transform 0.3s ease;
    }
    .slide-enter-from {
        transform: translateX(-100%);
    }
    .slide-leave-to {
        transform: translateX(-100%);
    }
</style>
