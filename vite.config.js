import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/main.css',
                'resources/css/auth.css',
                'resources/css/page.css',
                'resources/css/lobby.css',
                'resources/css/tournaments-list.css',
                'resources/css/form.css',
                'resources/css/field.css',
                'resources/css/footballers.css',
                'resources/css/draft.css',
                'resources/js/modal-menu.js',
                'resources/js/hidden-controls.js',
                'resources/js/form.js',
                'resources/js/pagination-leagues.js',
                'resources/js/activate-action.js',
                'resources/js/create-tournament-validation.js',
                'resources/js/leagues-search.js',
                'resources/js/timer.js',
                'resources/js/modal-password.js',
                'resources/js/tactics-dropdown.js'
            ],
            refresh: true,
        }),
    ],
});
