<?php
/**
 * Template Name: Blank Canvas (Temoakte)
 * Description: Template kosong untuk halaman kustom dengan header dan footer.
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="temoakte-content">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail mb-8">
                            <?php the_post_thumbnail('full', ['class' => 'w-full h-auto rounded-lg shadow-md']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>
        <?php else : ?>
            <p>No content found.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
