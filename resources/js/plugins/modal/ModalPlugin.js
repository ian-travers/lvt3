import Component from "./Component";

export default {
    install: (app, options) => {
        app.component('modal', Component)
    }
}
