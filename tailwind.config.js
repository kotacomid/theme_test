/** @type {import('tailwindcss').Config} */
module.exports = {
  // Mode Just-In-Time untuk performa build yang cepat
  mode: 'jit',

  // 1. Path Konten untuk Dipindai oleh Tailwind
  //    Tailwind akan memindai file-file ini untuk mencari class yang digunakan.
  content: [
    './*.php', // Memindai semua file PHP di direktori utama (header.php, footer.php, dll.)
    './page-templates/**/*.php',
    './page-templates/**/**/*.html', // Memindai semua template halaman landing Anda
    './node_modules/flowbite/**/*.js' // Wajib untuk fungsionalitas JavaScript Flowbite
  ],

  // 2. Konfigurasi Dark Mode
  //    Memungkinkan Anda menggunakan class `dark:` untuk styling mode gelap.
  darkMode: 'class',

  // 3. Ekstensi Tema (Opsional, karena Anda menggunakan @theme di CSS)
  //    Anda bisa menambahkan token desain di sini jika diperlukan.
  theme: {
    extend: {
      colors: {
        // Contoh jika Anda ingin menambahkan warna kustom melalui config
        // primary: {
        //   '50': '#eff6ff',
        //   '100': '#dbeafe',
        //   '200': '#bfdbfe',
        //   '300': '#93c5fd',
        //   '400': '#60a5fa',
        //   '500': '#3b82f6',
        //   '600': '#2563eb',
        //   '700': '#1d4ed8',
        //   '800': '#1e40af',
        //   '900': '#1e3a8a'
        // }
      },
      fontFamily: {
        // Contoh jika Anda ingin menambahkan font kustom melalui config
        // sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
      }
    },
  },

  // 4. Plugin yang Digunakan
  //    Wajib untuk mengaktifkan komponen dan styling dari Flowbite.
  plugins: [
    require('flowbite/plugin'),
    require('flowbite-typography'), // Plugin untuk class `prose`
  ],
};
