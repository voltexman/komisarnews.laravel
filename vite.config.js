import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/pages/main.css',
                'resources/js/pages/main.js',
                'resources/css/pages/articles.css',
                'resources/js/pages/articles.js',
                'resources/css/pages/contacts.css',
                'resources/js/pages/contacts.js'
            ],
            refresh: true,
        }),
        purge({
            templates: ['blade'],
        })
    ],
});
