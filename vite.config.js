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

                "resources/css/pages/project-item/project-item.css",
                "resources/js/pages/project-item/project-item.js",

                "resources/js/pages/technologies/technologies.js",
                "resources/css/pages/technologies/technologies.css",

                "resources/js/pages/mortgage/mortgage.js",
                "resources/css/pages/mortgage/mortgage.css",

                "resources/css/pages/blog/blog.css",
                "resources/js/pages/blog/blog.js",

                "resources/css/pages/blog-item/blog-item.css",
                "resources/js/pages/blog-item/blog-item.js",

                "resources/js/pages/contacts/contacts.js",
                "resources/css/pages/contacts/contacts.css",

                // js components
                "resources/js/components/feedback.js",
                "resources/js/components/project-item.js",
                "resources/js/components/certificates.js",

                "resources/js/components/trusted.js",
                "resources/css/components/trusted.css",
                // for components
                "resources/css/components/office-map.css",
                "resources/js/components/office-map.js",

                "resources/css/components/path.css",
                "resources/css/components/house_card.css",
                "resources/css/components/certificates.css",
                "resources/css/components/tech.css",
                "resources/css/components/aboutHeader.css",
                "resources/css/components/constructor.css",
                "resources/css/components/order.css",
                "resources/css/components/feedback.css",
                "resources/css/components/project-item.css",

                "resources/css/components/grid.css",
                "resources/css/components/article.css",

                "resources/css/components/selection.css",
                "resources/js/components/selection.js",

                "resources/js/components/faq.js",
                "resources/css/components/faq.css",
            ],
            refresh: true,
        }),
    ],
});
