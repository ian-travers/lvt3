require('./bootstrap')

import Alpine from 'alpinejs'
import { createApp} from "vue"
import Home from "./components/Home"
import Modal1 from "./components/Modal1"
import JustGetJson from "./components/JustGetJson"
import ProjectForm from "./components/ProjectForm"

const app = createApp({
    components: { Home, Modal1, JustGetJson, ProjectForm }
});

app.mount("#app");

window.Alpine = Alpine;
Alpine.start();
