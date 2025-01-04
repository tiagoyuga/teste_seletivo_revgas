const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    // .sass('resources/sass/app.scss', 'public/css2');
    // .sass('resources/modernize/css/styles.css', 'public/css2');
    // .copy('resources/modernize/css/styles.css', 'public/css');

/*mix.js('resources/js/app.js', 'public/js');
mix.postCss('resources/css/app.css', 'public/css');*/
