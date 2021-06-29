/**
 * Webpack configuration file used both in development and production
 *
 * We use Webpack merge to differentiate between development and production
 * builds. Configuration used in both builds are placed in this file.
 */

const path = require('path');
const JS_DIR = path.resolve(__dirname, 'src/js');
const BUILD_DIR = path.resolve(__dirname, 'build');

/**
 * Webpack can only understand JavaScript therefore we need to import our style
 * files inside our main.js. In our WordPress theme we separated our JavaScript
 * from our SCSS files, so we need to export out the css from the js. This is
 * done by this MiniCssExtractPlugin
 *
 * @link https://www.npmjs.com/package/mini-css-extract-plugin
 */
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

/**
 * This plugin will delete the build directory before every build to keep it
 * clean of overwrites
 *
 * @link https://www.npmjs.com/package/clean-webpack-plugin
 */
const {CleanWebpackPlugin} = require('clean-webpack-plugin');

module.exports = {
  mode: 'development', // default mode will be development

  entry: {
    main: JS_DIR + '/main.js',
  },

  module: {
    rules: [
      {
        // Javascript files
        test: /\.js$/,
        include: [JS_DIR],
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
      {
        // Sass files
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          {
            // Extracts css from javascript
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '../',
            },
          },
          {
            // Interprets import and url and resolves
            loader: 'css-loader',
            options: {
              sourceMap: true,
            },
          },
          {
            // Autoprefixes sass files
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: function() {
                  return [
                    require('autoprefixer'),
                  ];
                },
              },
            },
          },
          {
            // Compiles sass to css
            loader: 'sass-loader',
            options: {
              sourceMap: true,
            },
          },
        ],
      },
      {
        // Other source files
        test: /\.(png|svg)$/,
        use: {
          loader: 'file-loader',
          options: {
            esModule: false,
            name: '[name].[ext]',
            outputPath: 'img/',
          },
        },
      },
    ],
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
    }),
    new CleanWebpackPlugin(),
  ],

  externals: {
    jquery: 'jQuery',
  },

  output: {
    filename: 'js/[name].js',
    path: BUILD_DIR,
    clean: true,
  },
};
