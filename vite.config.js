import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/welcome.js',
            ],
            refresh: true,
        }),
        react(),
    ],
    resolve: {
        alias: {
            '~fontawesome': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free')
        }
    }
});
