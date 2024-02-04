const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');

module.exports = {
    stats: {
        errorDetails: true
    },
    performance: {
        maxAssetSize: 300000, // en bytes
        maxEntrypointSize: 300000, // en bytes
    },
    entry: {
        main: './src/assets/js/src/momo.js',
        momo: './src/assets/css/src/momo.scss'
    },
    output: {
        filename: 'src/assets/js/build/[name].min.js',
        path: path.resolve(__dirname),
    },
    mode: 'production',
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    { loader: 'css-loader', options: { url: false } },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: [
                                    require('postcss-preset-env')({
                                        stage: 0,
                                        autoprefixer: { grid: true }
                                    })
                                ],
                            },
                        },
                    },
                ],
            },
            {
                test: /\.scss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    { loader: 'css-loader', options: { url: false } },
                    'sass-loader',
                    {
                        loader: 'postcss-loader',
                        options: {
                          postcssOptions: {
                            plugins: [
                              require('postcss-preset-env')({
                                stage: 0,
                                autoprefixer: { grid: true }
                              })
                            ],
                          },
                        },
                    },
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'src/assets/css/build/[name].min.css',
        }),
        new RemoveEmptyScriptsPlugin(),
    ],
    optimization: {
        minimize: true,
        minimizer: [
            new CssMinimizerPlugin(),
            new TerserPlugin(),
        ],
    },
};