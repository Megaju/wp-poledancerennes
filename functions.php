<?php if ( function_exists('register_sidebar') ) register_sidebar(); ?><!-- widget sidebar - indiquer le nombres de colones dans register_sidebar(ici), ne rien mettre si < 2 colones -->
<?php add_theme_support( 'post-thumbnails' ); ?> <!-- Fonction d'ajout d'image à la une -->

<?php

register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );

?>
