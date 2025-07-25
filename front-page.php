<?php
/**
 * Template untuk Halaman Depan (Homepage)
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    
    <section class="bg-gray-900 text-white">
        <div class="temoakte-content text-center py-20 lg:py-32">
            <h1 class="text-4xl lg:text-6xl font-extrabold mb-4">Membangun Masa Depan Digital Anda</h1>
            <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto mb-8">
                Kami menggabungkan desain modern dan teknologi canggih untuk menciptakan solusi digital yang luar biasa.
            </p>
            <a href="/contact" class="temoakte-btn temoakte-btn-primary bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition-transform transform hover:scale-105">
                Mulai Proyek Anda
            </a>
        </div>
    </section>

    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="temoakte-content">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Mengapa Memilih Kami?</h2>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Tiga pilar utama yang kami tawarkan.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="temoakte-card text-center p-8 bg-white dark:bg-gray-700 rounded-lg shadow-md">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Performa Cepat</h3>
                    <p class="text-gray-600 dark:text-gray-300">Website yang dioptimalkan untuk kecepatan maksimum dan pengalaman pengguna terbaik.</p>
                </div>
                <div class="temoakte-card text-center p-8 bg-white dark:bg-gray-700 rounded-lg shadow-md">
                    <div class="text-blue-500 mb-4">
                         <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Desain Modern</h3>
                    <p class="text-gray-600 dark:text-gray-300">Antarmuka yang bersih, modern, dan responsif di semua perangkat.</p>
                </div>
                <div class="temoakte-card text-center p-8 bg-white dark:bg-gray-700 rounded-lg shadow-md">
                    <div class="text-blue-500 mb-4">
                         <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Dukungan Penuh</h3>
                    <p class="text-gray-600 dark:text-gray-300">Kami siap membantu Anda dari awal hingga akhir proyek.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
