import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
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
            safelist: [/^modal-/, /^cropper-/, /^dz-/, 'movingIn',
                'movingOutBackward', 'bi-save', 'bi-arrow-counterclockwise',
                'bi-zoom-in', 'bi-zoom-out', 'bi-arrow-left-right',
                'bi-arrow-down-up', 'rounded-start', 'rounded-end',
                'movingOutFoward', '-completed', 'col-3', 'my-3',
                'shadow-lg', 'shadow', 'rounded', 'd-grid',
                'bg-danger', 'rounded-top-0', 'btn-group', 'bi-x-lg'
            ],
        })
    ],
});
