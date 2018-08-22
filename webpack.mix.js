// let mix = require('laravel-mix');

// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */


// // mix.config.publicPath = 'public_html'

// mix.js('resources/assets/js/app.js', 'public/js')
//   .sass('resources/assets/sass/app.scss', 'public/css')
//   .options({
//     processCssUrls: false,
//     postCss: [
//       require('postcss-cssnext'),
//       require('postcss-custom-media'),
//       require('postcss-short-position'),
//       require('postcss-short-font-size'),
//       require('css-mqpacker')({sort: true})
//     ]
//   });

// mix.browserSync({
//   proxy: {
//     target: "localhost:8000"
//   }
// });



let mix = require('laravel-mix');
let path = require('path');

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


let publicDir = 'public';

mix.js('resources/assets/js/app.js', publicDir + '/js')
    .sass('resources/assets/sass/app.scss', publicDir + '/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('postcss-cssnext'),
            require('postcss-custom-media'),
            require('postcss-short-position'),
            require('postcss-short-font-size'),
            require('css-mqpacker')({sort: true})
        ]
    })
    .extract([
        'jquery',
        'vue',
        'lodash',
        'popper.js',
        'axios',
        'bootstrap'
    ])
    .version();

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
    .sourceMaps()
}

mix.autoload({
  jquery: ['$', 'window.jQuery', 'jQuery'],
  vue: ['Vue', 'window.Vue'],
  moment: ['moment', 'window.moment'],
});

mix.setResourceRoot(path.normalize(publicDir));
mix.setPublicPath(path.normalize(publicDir));


