import Component from "./Component";

export default {
    install: (app, options) => {
        app.component('modal', Component)

        app.config.globalProperties.$modal = {
            show(name) {
                location.hash = name
            },

            hide() {
                location.hash = '#'
            }
        }
    }
}
