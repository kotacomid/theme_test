<?php
/**
 * Template utama untuk menampilkan arsip postingan (Blog)
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="temoakte-content py-12">
        
        <header class="page-header mb-12 text-center">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
                <?php
                if (is_home() && !is_front_page()) {
                    single_post_title();
                } else {
                    echo 'Blog';
                }
                ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform transform hover:-translate-y-1'); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover']); ?>
                            </a>
                        <?php endif; ?>

                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400"><?php the_title(); ?></a>
                            </h2>
                            <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="entry-summary text-gray-700 dark:text-gray-300">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <div class="mt-12">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
