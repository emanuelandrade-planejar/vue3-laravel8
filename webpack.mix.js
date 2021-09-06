const mix = require('laravel-mix');

// mix.browserSync({
//     proxy: process.env.APP_URL,
//     port: 8001,
//     notify: false
// });

mix.js('resources/js/app.js', 'public/js').vue();

mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);