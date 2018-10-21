let mixx = require('laravel-mix');

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

mixx.js('resources/assets/js/backend/backend.js', 'public/js/backend.js')
    .js('resources/assets/js/frontend/frontend.js', 'public/js/frontend.js')
    .js('resources/assets/js/userend/userend.js', 'public/js/userend.js')
    .sass('resources/assets/sass/backend/backend.scss', 'public/css/backend.css')
    .sass('resources/assets/sass/frontend/frontend.scss', 'public/css/frontend.css')
    .sass('resources/assets/sass/userend/userend.scss', 'public/css/userend.css');
