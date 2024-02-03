<?php


    function register_header_menu() {
        register_nav_menus(
            array(
                'header-menu' => __('Menu do cabeçalho'),
                'extra-menu' => __('Menu extra')
            )
            );
    }



add_action('init', 'register_header_menu');




