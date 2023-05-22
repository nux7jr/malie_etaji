import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // for all
                "resources/css/app.css",
                "resources/js/app.js",

                "resources/css/pages/error/error.css",
                // for page
                "resources/js/pages/home/home.js",
                "resources/css/pages/home/home.css",

                "resources/css/pages/about/about.css",

                // js components
                "resources/js/components/feedback.js",
                "resources/js/components/project-item.js",
                // for components
                "resources/css/components/tech.css",
                "resources/css/components/aboutHeader.css",
                "resources/css/components/constructor.css",
                "resources/css/components/order.css",
                "resources/css/components/feedback.css",
                "resources/css/components/project-item.css",
            ],
            refresh: true,
        }),
    ],
});
