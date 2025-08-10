import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import '../css/filament-custom.css';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
    ],
});

