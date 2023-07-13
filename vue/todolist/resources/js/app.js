require('./bootstrap');
import { createApp } from 'vue';
import App from './vue/App.vue';
import store from './store.js';

createApp(App).use(store).mount('#app');