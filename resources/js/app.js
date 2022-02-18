require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp} from "vue";
import Home from "./components/Home";

const app = createApp({
    components: { Home }
});

app.mount("#app");

window.Alpine = Alpine;
Alpine.start();
