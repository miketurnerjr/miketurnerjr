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
mix.js('resources/js/app.js', 'public/js/app.js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/admin.scss', 'public/css')
   .browserSync('https://miketurnerjr.dev');


/*
mix.js('resources/js/app.js', 'public/js')
   //.js('resources/js/admin.js', 'public/js')
   //.js('resources/js/components/loader.js', 'public/js')
   //.sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/admin.scss', 'public/css')
   .copy('resources/css/morris_charts.css', 'public/css')
   .css('resources/css/icons.css', 'public/css')
   .css('resources/css/admin-layouts.css', 'public/css')

   .browserSync('https://miketurnerjr.dev');


   .css('resources/css/bootstrapon.min.css')
   */