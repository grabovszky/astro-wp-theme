/**
 * Webpack development build configuration
 */

const {merge} = require('webpack-merge'); // the default webpack configuration
const common = require('./webpack.common');

module.exports = merge(common, {
  mode: 'development',

  // Create an inline source map for every compiled file
  devtool: 'inline-source-map',
});
