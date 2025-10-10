require("./bootstrap");
window.Vue = require("vue").default;

// registre seu componente
Vue.component(
    "notifications",
    require("./components/notifications/notifications.vue").default
);

const app = new Vue({
    el: "#app",
});
