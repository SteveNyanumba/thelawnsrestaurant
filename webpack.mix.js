const mix = require('laravel-mix');

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

mix.webpackConfig(webpack => {
        return {
            plugins: [
                new webpack.ProvidePlugin({
                    $: 'jquery',
                    jQuery: 'jquery',
                    'window.jQuery': 'jquery'
                })
            ]
        };
    })
    .js('resources/backend/js/app.js', 'public/backend/js')
    .js('resources/frontend/main.js','public/frontend/js')
    .sass('resources/backend/sass/app.scss', 'public/backend/css')
    .sass('resources/frontend/sass/admin.scss', 'public/frontend/css')

