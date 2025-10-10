import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    server: {
        host: "curso-laravel-notifications.local",
        port: 5174, // ou qualquer porta livre
        hmr: {
            host: "curso-laravel-notifications.local",
        },
        headers: {
            "Access-Control-Allow-Origin": "*",
        },
    },
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
        vue(),
    ],
});
