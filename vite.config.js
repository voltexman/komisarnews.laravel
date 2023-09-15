import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/main.css',
                'resources/js/main.js',
                'resources/css/contacts.css',
                'resources/js/contacts.js'
            ],
            refresh: true,
        }),
    ],
});
