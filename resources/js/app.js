require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp} from "vue";
import Home from "./components/Home";
import Modal1 from "./components/Modal1";

const app = createApp({
    components: { Home, Modal1 }
});

app.mount("#app");

window.Alpine = Alpine;
Alpine.start();
