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
                "resources/js/pages/about/about.js",

                "resources/css/pages/projects/projects.css",
                "resources/js/pages/projects/projects.js",
                // js components
                "resources/js/components/feedback.js",
                "resources/js/components/project-item.js",
                "resources/js/components/certificates.js",

                // for components
                "resources/css/components/path.css",

                "resources/css/components/certificates.css",
                "resources/css/components/tech.css",
                "resources/css/components/aboutHeader.css",
                "resources/css/components/constructor.css",
                "resources/css/components/order.css",
                "resources/css/components/feedback.css",
                "resources/css/components/project-item.css",

                "resources/css/components/grid.css",
            ],
            refresh: true,
        }),
    ],
});
