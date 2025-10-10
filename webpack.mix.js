const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    // .vue() // habilita o Vue 2
    .sass("resources/sass/app.scss", "public/css");
