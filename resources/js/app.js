require('./bootstrap')

import Alpine from 'alpinejs'
import { createApp} from "vue"
import Home from "./components/Home"
import Modal1 from "./components/Modal1"
import JustGetJson from "./components/JustGetJson"
import ProjectForm from "./components/ProjectForm"
import MenuList from "./components/MenuList"
import Carousel from "./components/Carousel"

const app = createApp({
    components: { Home, Modal1, JustGetJson, ProjectForm, MenuList, Carousel }
});

app.mount("#app");

window.Alpine = Alpine;
Alpine.start();
