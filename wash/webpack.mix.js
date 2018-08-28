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

mix.setPublicPath('public');
mix.setResourceRoot('../');

mix.js('resources/assets/js/app.js', 'public/js').autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
}).sass('resources/assets/sass/app.scss', 'public/css').copy('node_modules/slick-carousel/slick', 'public/assets/slick');

