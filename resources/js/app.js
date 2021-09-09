require("./bootstrap");
import { createApp } from "vue";

import Home from "./components/Pages/Home.vue"

const app = createApp({
    components: {
        Home
    }
});

console.log('window.__pageProps :>> ', window.__pageProps);

app.config.globalProperties.$pageProps = window.__pageProps
app.config.globalProperties.$globalData = window.__globalData

app.mount("#app");
