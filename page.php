<?php
/**
 * Template default untuk menampilkan konten Halaman (Pages)
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="temoakte-content py-12 lg:py-16">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('prose dark:prose-invert max-w-none'); ?>>
                    
                    <header class="entry-header mb-8">
                        <?php the_title( '<h1 class="entry-title text-4xl font-bold text-gray-900 dark:text-white">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php
                        // INI BAGIAN KUNCI: Menampilkan konten dari editor
                        the_content();
                        ?>
                    </div>

                </article>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>