import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // for all
                "resources/css/app.css",
                "resources/js/app.js",

                // for page
                "resources/css/pages/error/error.css",
                "resources/css/pages/home/home.css",
                "resources/js/pages/home/home.js",

                // js components
                "resources/js/components/feedback.js",
                // for components
                "resources/css/components/tech.css",
                "resources/css/components/constructor.css",
                "resources/css/components/order.css",
                "resources/css/components/feedback.css",
            ],
            refresh: true,
        }),
    ],
});
