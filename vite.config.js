import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/admin.css",
                "resources/js/admin.js",
                "resources/js/app.js",
                "resources/css/app.css",
                "resources/js/home.js",
                "resources/css/home.css",
                "resources/js/about.js",
                "resources/css/about.css",
                "resources/js/shop.js",
                "resources/css/shop.css",
                "resources/js/contact.js",
                "resources/css/contact.css",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            $: "jQuery",
        },
    },
});
