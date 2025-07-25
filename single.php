<?php
/**
 * Template untuk menampilkan konten Postingan tunggal (Single Post)
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="temoakte-content py-12 lg:py-16">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('prose dark:prose-invert max-w-none'); ?>>
                    
                    <header class="entry-header mb-8">
                        <?php the_title( '<h1 class="entry-title text-4xl font-bold text-gray-900 dark:text-white mb-4">', '</h1>' ); ?>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            <span>Ditulis pada <?php echo get_the_date(); ?></span>
                        </div>
                    </header>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail mb-8">
                            <?php the_post_thumbnail('full', ['class' => 'w-full h-auto rounded-lg shadow-md']); ?>
                        </div>
                    <?php endif; ?>

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