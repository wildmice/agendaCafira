import './bootstrap';


import { createApp } from 'vue'; // Importa createApp de Vue

// Importar el módulo de Bootstrap JS
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap; // Opcional, para acceder a Bootstrap JS globalmente si lo necesitas

// Crear una instancia de tu aplicación Vue
const app = createApp({});

// Aquí puedes registrar tus componentes Vue globales si los tienes
// app.component('example-component', ExampleComponent);

// Montar la aplicación Vue en el elemento con el ID "app"
app.mount('#app');

console.log('Bootstrap and Vue.js are loaded!');