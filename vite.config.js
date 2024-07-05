import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/main.css', 'resources/css/auth.css', 'resources/css/page.css', 'resources/js/modal-menu.js', 'resources/js/players-card.js'],
            refresh: true,
        }),
    ],
});
