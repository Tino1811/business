import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],


    //se agrego este metodo resolve
    //pagina de destino: https://larainfo.com/blogs/how-to-install-jquery-in-laravel-9
    resolve: {
        alias: {
            '$': 'jQuery'
        }
    }

});
