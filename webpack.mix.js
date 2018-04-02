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


mix.config.publicPath = 'public_html'

mix.js('resources/assets/js/app.js', 'public_html/js')
  .sass('resources/assets/sass/app.scss', 'public_html/css')
  .options({
    processCssUrls: false,
    postCss: [
      require('postcss-cssnext'),
      require('postcss-custom-media'),
      require('postcss-short-position'),
      require('postcss-short-font-size'),
      require('css-mqpacker')({sort: true})
    ]
  });

mix.browserSync({
  proxy: {
    target: "localhost:8000"
  }
});

