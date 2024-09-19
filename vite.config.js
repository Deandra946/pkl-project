import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/main.css',
                'resources/js/apps.js',
                'resources/js/detail.js',
                
            ],
            refresh: true,
        }),
    ],
});
