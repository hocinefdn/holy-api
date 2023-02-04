import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/backend/Dashboard.vue";
import Login from "../views/backend/Login.vue";
import Signup from "../views/backend/Signup.vue";

const routes = [
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
    {
        path: "/signup",
        name: "Signup",
        component: Signup,
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: Dashboard,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
