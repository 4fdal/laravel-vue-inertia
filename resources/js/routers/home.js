import app from "../components/app.vue";

const home = () => app;

export default [
    {
        path: "/home",
        component: home,
        name: "home",
    },
];
