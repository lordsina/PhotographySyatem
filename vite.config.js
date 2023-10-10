import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss','resources/js/app.js'],
            refresh: true,
        }),

    ], resolve: {
        alias: {
            '$': 'jQuery',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~select2': path.resolve(__dirname, 'node_modules/select2'),
            '~dropzone': path.resolve(__dirname, 'node_modules/dropzone'),
            '~jalalidatepicker': path.resolve(__dirname, 'node_modules/@majidh1/jalalidatepicker'),

        }
    }
});
