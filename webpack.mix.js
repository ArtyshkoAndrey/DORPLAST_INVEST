const mix = require('laravel-mix');

mix.extract()
  .js('resources/js/app.js', 'public/js').vue({version: 2})
  .sass('resources/sass/app.scss', 'public/css')
  .disableNotifications();
