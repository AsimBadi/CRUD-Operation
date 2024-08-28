import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/js/app.js', // Add your main JS file here
            'resources/js/first.js',
            'resources/js/search.js'
        ]),
    ],
});
