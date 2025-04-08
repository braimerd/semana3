<?php

function mytheme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menu(array'primary' => __('Menú Principal'))
}

add_action('after_setup_theme', 'mytheme_setup');
