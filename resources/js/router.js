import {createRouter, createWebHistory} from "vue-router";
import App from "./components/App";

const routes = [
    {
        path: "/",
        name: App,
        component: App,
    }
]
const router = createRouter({
    routes,
    history:createWebHistory()
});

export default router;
