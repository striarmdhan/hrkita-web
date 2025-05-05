import './bootstrap';
import { createApp } from 'vue'

import showPassword from './components/loginPage/showPassword.vue'

import profileTabs from './components/profileTabs.vue';
import sidebar from './components/sidebar.vue';
import sidebarItem from './components/sidebarItem.vue';

import navbar from './components/welcomePage/navbar.vue';
import landingAnimation from './components/welcomePage/landingAnimation.vue';
import featuresSection from './components/welcomePage/featuresSection.vue';
import hrInfo from './components/welcomePage/hrInfo.vue';
import scrollToTop from './components/welcomePage/scrollToTop.vue';



const app = createApp({})
app.component('profile-tabs', profileTabs);
app.component('show-password', showPassword);
app.component('sidebar', sidebar);
app.component('sidebar-item', sidebarItem);

app.component('navbar', navbar);
app.component('landing-animation', landingAnimation);
app.component('features-section', featuresSection);
app.component('hr-info', hrInfo);
app.component('scroll-to-top', scrollToTop);

app.mount('#app')
