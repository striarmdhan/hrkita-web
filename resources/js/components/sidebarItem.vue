<template>
  <a
  :href="route"
  class="flex items-center gap-3 px-4 py-2 rounded-r-xl font-semibold relative"
  :class="{
    'bg-[#D8EFFF] text-[#0C519D] before:content-[\'\'] before:absolute before:-left-2 before:top-0 before:bottom-0 before:w-2 before:bg-red-500 before:rounded-l-none': active,
    'text-gray-500 hover:text-[#0C519D]': !active
  }"
>
  <i :class="['fa-solid', icon, active ? 'text-[#0C519D]' : '']"></i>

  <div v-if="!collapsed" class="flex items-center">
    <span class="transition-all duration-300 text-sm md:text-md" :class="active ? 'text-[#0C519D]' : ''">{{ label }}</span>
    <span class="transition-all duration-300 text-sm md:text-md" :class="active ? 'text-red-500' : ''">{{ highlightedText }}</span>
  </div>
</a>
</template>

<script>
export default {
  name: 'SidebarItem',
  props: {
    icon: String,
    label: String,
    route: String,
    active: Boolean,
    highlightedText: String,
    collapsed: Boolean
  }
};
</script>
