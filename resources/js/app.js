import './bootstrap';
import { createApp } from 'vue'
import showPassword from './components/showPassword.vue'

const app = createApp({})
app.component('show-password', showPassword)
app.mount('#app')
