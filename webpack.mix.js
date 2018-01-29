var mix = require('laravel-mix');

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

mix


  .js('resources/assets/js/app.js', 'public/js')
  .js('node_modules/jquery/dist/jquery.js', 'public/js')

   .sass('resources/assets/sass/app.scss', 'public/css');
    mix.minify('public/js/app.js');
    mix.minify('public/js/jquery.js');
    mix.minify('public/js/sweetalert2.js');
    mix.minify('public/css/sweetalert2.css');
mix.minify('public/css/estiloshome.css');
