function font_awesome_icons() {
    wp_enqueue_style( 'fontawesome-icons', '//use.fontawesome.com/{Use_your_own_unique_id_here}.css' );
}
add_action( 'wp_enqueue_scripts', 'font_awesome_icons' );