import bootstrap from 'bootstrap';
import { createApp } from 'vue';

const app = createApp({});
// Importar el módulo de Bootstrap JS

app.component('Logo', {
    template: `
        <div class="logo">
            <img src="/img/logo.png" alt="Logo" />
        </div>
    `,
    mounted() {
        console.log('Logo component mounted');
    }
});