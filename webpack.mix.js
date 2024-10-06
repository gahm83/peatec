let mix = require('laravel-mix').setPublicPath('build');

/*
  |--------------------------------------------------------------------------
  | Mix Asset Management
  |--------------------------------------------------------------------------
  |
  | Mix provides a clean, fluent API for defining some Webpack build steps
  | for your Laravel application. By default, we are compiling the Sass
  | file for your application, as well as bundling up your JS files.
  |
*/

mix.js('src/app.js', 'build')
  .postCss('src/app.css', 'build')
  .options({
    processCssUrls: false,
    postCss: [
      require("postcss-import"),
      require('postcss-nested'),
      require('autoprefixer'),
      require('tailwindcss'),
    ]
  });

mix.options({
  hmrOptions: {
    host: 'localhost',
    port: '10023'
  },
});

mix.webpackConfig({
  devServer: {
    port: '10023'
  },
});
