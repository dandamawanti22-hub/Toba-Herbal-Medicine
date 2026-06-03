const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')

   // frontend
   .sass('resources/sass/frontend.scss', 'public/css')

   // admin (INI YANG KURANG)
   .sass('resources/sass/admin.scss', 'public/css')

   // optional (boleh hapus kalau tidak dipakai)
   .sass('resources/sass/app.scss', 'public/css')

   .sourceMaps();