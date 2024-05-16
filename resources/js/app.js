import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Home from './component/Home.vue';


const app = createApp({});

app.component('home-component', Home);

app.mount("#app");
