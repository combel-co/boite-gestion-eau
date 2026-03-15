<?php
function bge_setup() {
    load_theme_textdomain( 'boite-gestion-eau', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'bge_setup' );
