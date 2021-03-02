const path = require('path');
const globImporter = require('node-sass-glob-importer');
const _StyleLintPlugin = require('stylelint-webpack-plugin');
const { namespaces } = require('./setupTwig');

module.exports = async ({ config }) => {
  // Twig
  config.module.rules.push({
    test: /\.twig$/,
    use: [
      {
        loader: 'twig-loader',
        options: {
          twigOptions: {
            namespaces,
          },
        },
      },
    ],
  });

  // SCSS
  config.module.rules.push({
    test: /\.s[ac]ss$/i,
    use: [
      'style-loader',
      {
        loader: 'css-loader',
        options: {
          sourceMap: true,
        },
      },
      {
        loader: './node_modules/aluminum-capsule/node_modules/sass-loader',
        options: {
          sourceMap: true,
          sassOptions: {
            importer: globImporter(),
          },
        },
      },
    ],
  });

  config.plugins.push(
    new _StyleLintPlugin({
      configFile: path.resolve(__dirname, '../', 'node_modules/aluminum-capsule/webpack/.stylelintrc'),
      context: path.resolve(__dirname, '../', 'base-components'),
      files: '**/*.scss',
      failOnError: false,
      quiet: false,
    }),
  );

  // YAML
  config.module.rules.push({
    test: /\.ya?ml$/,
    loader: 'js-yaml-loader',
  });

  // JS
  config.module.rules.push({
    test: /\.js$/,
    exclude: /node_modules/,
    loader: 'eslint-loader',
    options: {
      cache: true,
    },
  });

  return config;
};
