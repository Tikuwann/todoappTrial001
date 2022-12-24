import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

require('./bootstrap');
import router from "./routes";
import ExampleComponent from './components/ExampleComponent.vue';

import { createApp } from 'vue';

const app = createApp({
    components: {
        ExampleComponent
    }
}).mount('#app');
