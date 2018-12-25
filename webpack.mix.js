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
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
      'resources/assets/css/uikit.css',
      'resources/assets/css/uikit.min.css',
      'resources/assets/css/theme.css',
      'resources/assets/css/simplebar.css',
  ], 'public/css/all.css')
  .scripts([
   'resources/assets/js/uikit.min.js',
   'resources/assets/js/uikit.js',
   'resources/assets/js/simplebar.min.js',
   'resources/assets/js/components/grid.min.js',
   'resources/assets/js/components/slideset.min.js',

], 'public/js/all.js');

