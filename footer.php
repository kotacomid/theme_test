</div><footer class="bg-white dark:bg-gray-800">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                 <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">' . get_bloginfo('name') . '</span>';
                }
                ?>
            </a>
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'menu_class'     => 'flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400',
                'container'      => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'fallback_cb'    => false,
            ]);
            ?>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <?php echo date('Y'); ?> <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:underline"><?php bloginfo('name'); ?>™</a>. All Rights Reserved.</span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
