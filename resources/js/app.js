import 'bootstrap';
import axios from 'axios';
import { createApp } from 'vue';
import { createPinia } from "pinia";
// import ExampleComponent from './components/ExampleComponent.vue';
import ArticleComponent from './components/ArticleComponent.vue';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const pinia = createPinia();

const app = createApp({});

// app.component('example-component', ExampleComponent);
app.component('article-component', ArticleComponent);

app.use(pinia);

app.mount('#app');

import.meta.glob([
    '../img/**',
]);
