let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .browserSync({
        // host: '192.168.11.11',
        proxy: 'tournament-planner.app',
        notify: false,
        open: false,
        files: [
           '!node_modules',
           '!vendor',
           'resources/assets/{*,**/*}',
           'resources/views/{*,**/*}',
           'public/{*,**/*}',
           '{*,**/*}.php'
        ],
        watchOptions: {
            usePolling: true,
            interval: 1000
        }
   });
