<template>
    <div class="flex">
        <aside
            :class="collapsed ? 'w-16 md:w-20' : 'w-42 md:w-64'"
            class="flex-shrink-0 bg-white h-screen px-2 py-6 overflow-hidden transition-all duration-300 ease-in-out border-r-2 border-[#E3E8F3]"
        >
        <div class="flex items-center justify-between mb-8 px-4">
            <div v-if="!collapsed" class="text-[#0C519D] font-semibold">
                <div class="text-xs font-semibold">Selamat Datang,</div>
                <div class="text-xs md:text-md font-semibold">{{ userName }}</div>
            </div>
            <button @click="toggleSidebar" class="text-red-500 focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <ul class="space-y-4">
            <li>
            <sidebar-item
                icon="fa-id-card"
                label="Profile"
                highlighted-text="Kita"
                :route="routes.profile"
                :active="activeRoutes.profile"
                :collapsed="collapsed"
            />
            </li>
            <li>
            <sidebar-item
                icon="fa-calendar-days"
                label="Cuti"
                highlighted-text="Kita"
                :route="routes.cuti"
                :active="activeRoutes.cuti"
                :collapsed="collapsed"
            />
            </li>
            <li>
            <sidebar-item
                icon="fa-fingerprint"
                label="Absen"
                highlighted-text="Kita"
                :route="routes.fingerprint"
                :active="activeRoutes.fingerprint"
                :collapsed="collapsed"
            />
            </li>
            <li>
            <sidebar-item
                icon="fa-briefcase"
                label="Dinas"
                highlighted-text="Kita"
                :route="routes.sppd"
                :active="activeRoutes.sppd"
                :collapsed="collapsed"
            />
            </li>
        </ul>
        </aside>
    </div>
</template>

<script>
    export default {
        name: 'Sidebar',
        props: {
            userName: String,
            routes: Object,
            activeRoutes: Object
        },
        data() {
            return {
                collapsed: localStorage.getItem('sidebar-collapsed') === 'true'
            };
        },
        methods: {
            toggleSidebar() {
                this.collapsed = !this.collapsed;
                localStorage.setItem('sidebar-collapsed', this.collapsed);
            }
        },
        mounted() {
            const stored = localStorage.getItem('sidebar-collapsed');
            if (stored !== null) {
                this.collapsed = stored === 'true';
            }
        }
    };
</script>
