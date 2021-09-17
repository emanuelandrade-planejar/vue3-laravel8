require("./bootstrap");

import { createApp } from "vue";

import App from "./App.vue";

const app = createApp(App);

app.config.globalProperties.$pageProps = window.__pageProps;
app.config.globalProperties.$globalData = window.__globalData;
app.config.globalProperties.$currentPage = window.__currentPage;

app.mount("#app");
