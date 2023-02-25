import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/backend/Dashboard.vue";
import Login from "../views/backend/Login.vue";
import Signup from "../views/backend/Signup.vue";
import DefaultLayout from "../components/backend/DefaultLayout.vue";
import store from "../store";
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
        redirect: "/dashboard",
        component: DefaultLayout,
        meta: { requiresAuth: true },
        children: [
            { path: "/dashboard", name: "Dashboard", component: Dashboard },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.user.token) {
        next({ name: "Login" });
    } else if (
        store.state.user.token &&
        (to.name === "Login" || to.name === "SignUp")
    ) {
        next({ name: "Dashboard" });
    } else {
        next();
    }
});

export default router;
