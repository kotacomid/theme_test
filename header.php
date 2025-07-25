<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50 dark:bg-gray-900 font-sans'); ?>>
<?php wp_body_open(); ?>

<nav class="bg-white border-gray-200 dark:bg-gray-800 border-b sticky top-0 z-50">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">' . get_bloginfo('name') . '</span>';
        }
        ?>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class'     => 'font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700',
            'container'      => false,
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker'         => new Temoakte_Nav_Walker(),
        ]);
        ?>
    </div>
  </div>
</nav>

<div id="content" class="site-content">
