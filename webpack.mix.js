const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').vue();

mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.browserSync({
    port: 8001,
    notify: false,
    watch: true,
    proxy: {
        target: "http://localhost:8000/",
        ws: true,
    },
    files: [
        'public/js/**/*',
        'public/css/**/*',
        'public/**/*.+(html|php)',
        'resources/views/**/*.php'
    ],
});