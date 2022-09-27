const mix = require("laravel-mix");

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
mix.sass("resources/assets/scss/style.scss", "public/css", {
    sassOptions: {
        includePaths: ["node_modules"],
    },
})
    .js("resources/assets/js/main.js", "public/js")
    .browserSync("techhub.local");
