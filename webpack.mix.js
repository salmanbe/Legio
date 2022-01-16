const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/*
 mix.js('resources/js/app.js', 'public/assets/js').postCss('resources/css/app.css', 'public/assets/css', [
 require('postcss-import'),
 require('tailwindcss'),
 require('autoprefixer'),
 ]);
 */

mix.js('resources/js/app.js', 'public/assets/js')
        .postCss('resources/css/app.css', 'public/assets/css')
        .options({
            processCssUrls: false,
            postCss: [tailwindcss('tailwind.config.js')],
        })
        .version();


mix.combine([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/home.js'
], 'public/assets/js/app.js');