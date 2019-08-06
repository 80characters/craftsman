const mix = require('laravel-mix');

const PATHS = {
    src: './resources',
    dist: './public'
};

mix.js(`${PATHS.src}/admin/js/script.js`, `${PATHS.dist}/admin/js`)
    .sass(`${PATHS.src}/admin/sass/style.sass`, `${PATHS.dist}/admin/css`);

mix.browserSync({
    proxy: 'craftsman.local'
});