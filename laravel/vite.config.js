import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/drag.js',
                'resources/js/click.js',
                'resources/css/main.css',
            ],
            refresh: true,
        }),
    ],
    define: {
        global: "window"
    },
    server: {
        hmr : {
            host: 'localhost'
        }
    }
});
