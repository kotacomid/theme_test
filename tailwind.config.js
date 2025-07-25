/** @type {import('tailwindcss').Config} */
module.exports = {
  // Mode Just-In-Time untuk performa build yang cepat
  mode: 'jit',

  // 1. Path Konten untuk Dipindai oleh Tailwind
  //    Tailwind akan memindai file-file ini untuk mencari class yang digunakan.
  content: [
    './*.php', // Memindai semua file PHP di direktori utama (header.php, footer.php, dll.)
    './page-templates/**/*.php', // Memindai semua template halaman landing Anda
    './node_modules/flowbite/**/*.js' // Wajib untuk fungsionalitas JavaScript Flowbite
  ],

  // 2. Konfigurasi Dark Mode
  //    Memungkinkan Anda menggunakan class `dark:` untuk styling mode gelap.
  darkMode: 'class',
  // 4. Plugin yang Digunakan
  //    Wajib untuk mengaktifkan komponen dan styling dari Flowbite.
  plugins: [
    require('flowbite/plugin'),
    require('flowbite-typography'), // Plugin untuk class `prose`
  ],
};
