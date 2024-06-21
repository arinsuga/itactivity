const mix = require('laravel-mix');
require('laravel-mix-purgecss');

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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.setPublicPath('public');
mix.setResourceRoot('../');


//BO Partial JS
// mix.scripts([
//       'resources/plugins/TableFilter/TableFilter.js',
//       'resources/plugins/TableToExcel/TableToExcel.js',
//       'resources/plugins/jspdf/jspdf.js',
//       'resources/plugins/jspdf/jspdf.plugin.autotable.js',
//       'resources/plugins/jspdf/TableToPdf.js',
//       'resources/plugins/xlsx/xlsx.min.js'
//    ], 'public/js/CustomForIndex.js');


//BO Full
mix.js('resources/js/admin.js', 'public/js')
   .js('resources/js/app.js', 'public/js')
   .extract(['jquery', 'overlayscrollbars', 'popper.js', 'bootstrap'])
   .sass('resources/sass/admin.scss', 'public/css')
   .sass('resources/sass/app.scss', 'public/css')
   .copyDirectory('resources/assets/img', 'public/img')
   .copyDirectory('resources/plugins', 'public/plugins')
   .styles([
    'resources/css/main.css'
   ], 'public/css/main.css')
   .scripts([
      'resources/js/main.js'
   ], 'public/js/main.js')
   .scripts([
      'resources/plugins/TableToExcel/TableToExcel.js'
   ], 'public/js/TableToExcel.js')
   .scripts([
      'resources/plugins/TableFilter/TableFilter.js',
      'resources/plugins/TableToExcel/TableToExcel.js',
      'resources/plugins/jspdf/jspdf.js',
      'resources/plugins/jspdf/jspdf.plugin.autotable.js',
      'resources/plugins/jspdf/TableToPdf.js',
      'resources/plugins/xlsx/xlsx.min.js'
   ], 'public/js/CustomForIndex.js');

//WEBSITE 1 ==> Do not use ( laravel mix problem )
// mix.js('resources/js/website.js', 'public/website/js')
//    .extract(['jquery', 'popper.js', 'bootstrap'])
//    .sass('resources/sass/website.scss', 'public/website/css')
//    .copyDirectory('resources/website/img', 'public/website/img');

//WEBSITE 2 ==> Do not use ( laravel mix problem )
// mix.styles([
//    'resources/website/css/bootstrap.min.css',
//    'resources/website/fonts/font-awesome.min.css',
//    'resources/website/fonts/simple-line-icons.css',
//    'resources/website/css/slicknav.css',
//    'resources/website/css/nivo-lightbox.css',
//    'resources/website/css/animate.css',
//    'resources/website/css/main.css',
//    'resources/website/css/responsive.css'
//    ], 'public/css/website.css')
//    .scripts([
//       'resources/website/js/jquery-min.js',
//       'resources/website/js/popper.min.js',
//       'resources/website/js/bootstrap.min.js',
//       'resources/website/js/jquery.mixitup.js',
//       'resources/website/js/jquery.counterup.min.js',
//       'resources/website/js/waypoints.min.js',
//       'resources/website/js/wow.js',
//       'resources/website/js/jquery.nav.js',
//       'resources/website/js/jquery.easing.min.js',
//       'resources/website/js/nivo-lightbox.js',
//       'resources/website/js/jquery.slicknav.js',
//       'resources/website/js/main.js'
//    ], 'public/js/website.js')
//    .copyDirectory('resources/website/img', 'public/website/img');
