<template>
    <a
        :href="route"
        :class="[
            'flex items-center space-x-3 px-4 py-2 rounded-md transition-all duration-200',
            active ? 'bg-[#E6F0FF] text-[#0C519D] font-semibold' : 'text-gray-400 hover:bg-gray-100'
        ]"
    >
        <i :class="['fa-solid', icon]"></i>
        <span>
            {{ label }}<span :class="active ? 'text-red-500' : 'text-gray-400'" class="ml-0.5">{{ highlightedText }}</span>
        </span>
    </a>
</template>

<script>
export default {
    name: 'SidebarItem',
    props: {
        icon: String,
        label: String,
        highlightedText: String,
        route: String,
        active: Boolean,
        collapsed: Boolean // optional, tapi tetap diterima
    }
};
</script>
