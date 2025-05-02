import './bootstrap';
import { createApp } from 'vue'
import showPassword from './components/showPassword.vue'
import profileTabs from './components/profileTabs.vue';
import sidebar from './components/sidebar.vue';
import sidebarItem from './components/sidebarItem.vue'; 

const app = createApp({})
app.component('profile-tabs', profileTabs);
app.component('show-password', showPassword)
app.component('sidebar', sidebar);
app.component('sidebar-item', sidebarItem);
app.mount('#app')
