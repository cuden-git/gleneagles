const mix = require('laravel-mix');
const StyleLintPlugin = require('stylelint-webpack-plugin');
require('laravel-mix-imagemin');

// Custom copy assets function to prevent assets from being minified
mix.copyOutsideMixWorkflow = function (from, to) {
  new File(from).copyTo(new File(to).path());
  return this;
}.bind(mix);

// Update the destination of built assets
mix.setPublicPath('resources/dist');

// Set browsersync url
mix.browserSync({
  proxy: 'ennismore.wordpress.test',
});

// Autoload jQuery whenever it's called
mix.autoload({
  jquery: ['$', 'window.jQuery'],
});

mix.babelConfig({
  plugins: [
    '@babel/plugin-syntax-dynamic-import',
    '@babel/plugin-syntax-export-default-from'
  ],
});

// Copy fonts when building assets
mix.copyDirectory('resources/assets/fonts', 'resources/dist/fonts');

// Configure Webpack
mix.webpackConfig({
  module: {
    rules: [
      {
          test: /\.js$/,
          use: 'import-glob-loader',
      },
      {
          test: /\.scss$/,
          use: 'import-glob-loader',
      },
    ],
  },
  plugins: [
    new StyleLintPlugin({
      syntax: 'scss',
    }),
  ],
  output: {
    publicPath: '/sandbox/wp-content/themes/sandbox/resources/dist/',
    chunkFilename: 'assets/dist/scripts/[name].[chunkhash].js',
  },
})

// JS Assets
mix.js('resources/assets/scripts/main.js', 'scripts/main.js');
// mix.js('resources/assets/scripts/second.js', 'scripts/second.js');

// SASS Assets
mix.sass('resources/assets/styles/main.scss', 'styles/main.css').options({
  processCssUrls: false,
});
// Image compression
mix.imagemin(
  'images/**.*',
  {
      context: 'resources/assets',
  },
  {
      optipng: {
          optimizationLevel: 5,
      },
      jpegtran: null,
      plugins: [
          require('imagemin-mozjpeg')({
              quality: 100,
              progressive: true,
          }),
      ],
  }
);

// Version files for cache busting
mix.version([
  'resources/dist/images',
  'resources/dist/fonts',
]);
