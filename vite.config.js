import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { viteStaticCopy } from "vite-plugin-static-copy";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/reset.css",
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/jquery.inputmask.min.js",
                "resources/js/common.js",
                "resources/js/main.js",
                "resources/scss/app.scss",
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: "resources/img/*",
                    dest: "assets/img",
                },
            ],
        }),
    ],
});
