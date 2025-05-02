<template>
    <label for="password" class="font-medium text-xs">Password</label>
    <div class="relative mt-1">
        <input 
            :type="show ? 'text' : 'password'"
            placeholder="Password"
            name="password"
            class="w-full px-4 py-1.5 text-sm border rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-400"
            required
        />
        <button type="button" @click="toggle" class="absolute right-3 top-1.5 text-sm text-[#0C519D]">
            <i :class="show ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'"></i>
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const show = ref(false)
const toggle = () => {
    show.value = !show.value
}
</script>
