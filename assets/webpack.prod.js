/**
 * Webpack production build configuration
 *
 * In production we need to optimise our source code to be optimal,
 * we strip unused css, unused javascript from our files, we don't need
 * sourcemaps anymore, and also we cut out all unnecessary whitespace and
 * comments from our files. Also we uglify our javascript. All of this is done
 * to reduce our file sizes, for a more efficient website.
 */


const {merge} = require('webpack-merge'); // load default webpack configuration
const common = require('./webpack.common');

const path = require('path');
/**
 * we require glob-all instead of glob, because we need to look inside our
 * source files which are outside our assets directory
 */
const glob = require('glob-all');
const SRC_DIR = path.resolve(__dirname, '..');

/**
 * CssMinimizerPlugin will be the one who strips all whitespace, comments from
 * our css files
 * @link https://www.npmjs.com/package/css-minimizer-webpack-plugin
 */
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

/**
 * Terser will minify our javascript
 *
 * @link https://www.npmjs.com/package/terser-webpack-plugin
 */
const TerserPlugin = require('terser-webpack-plugin');

/**
 * PurgeCss is responsible for removing all unused css from our files. So we
 * can import the whole bootstrap library, which in production will be removed
 * of all unused classes
 *
 * @link https://www.npmjs.com/package/purgecss-webpack-plugin
 */
const PurgecssPlugin = require('purgecss-webpack-plugin');

module.exports = merge(common, {
  mode: 'production',

  module: {
    rules: [],
  },

  optimization: {
    minimize: true,
    minimizer: [
      // Minimize Css
      new CssMinimizerPlugin(),
      // Minimize and uglify javascript
      new TerserPlugin({
        test: /\.js(\?.*)?$/i,
        parallel: true,
        terserOptions: {
          format: {
            comments: false,
          },
        },
        extractComments: false,  // we don't need comments
      }),
    ],
  },

  plugins: [
    // Cut unused css for production
    new PurgecssPlugin({
      /**
       * If you add new php files, modify the paths, so it is included in.
       * This is required for the PurgeCss plugin to look for used classes.
       * If you don't include a file, purge css won't recognise used classes in
       * that file and cuts it out.
       */
      paths: glob.sync([
        SRC_DIR + '/*.php',
        SRC_DIR + '/template-parts/*.php',
        SRC_DIR + '/template-parts/**/*.php',
        SRC_DIR + '/inc/**/*.php',
        SRC_DIR + '/assets/src/js/listeners/*.js',
      ]),
    }),
  ],
});
