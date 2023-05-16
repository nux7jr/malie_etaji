import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/pages/home/home.css",
                "resources/js/pages/home/home.js",
            ],
            refresh: true,
        }),
    ],
});
