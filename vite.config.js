import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/scss/main.scss",
            ],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: "fluffy-garbanzo-57vxrvxwpqwf66-5173.app.github.dev",
            protocol: "wss",
            clientPort: 443,
        },
    },
    base: "/",
});
