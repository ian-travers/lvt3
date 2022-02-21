const mix = require('laravel-mix');

mix.setPublicPath('public/build').setResourceRoot('/build/');
mix.js('resources/js/app.js', 'js').vue();
mix.postCss('resources/css/app.css', 'css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
mix.version();
