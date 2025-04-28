
require('./bootstrap');

import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

const app = createApp({});

app.component('example-component', ExampleComponent);

app.mount('#app'); // Vérifie que cet ID correspond à un élément HTML dans ta vue
