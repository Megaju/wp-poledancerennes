<?php if ( function_exists('register_sidebar') ) register_sidebar(); ?><!-- widget sidebar - indiquer le nombres de colones dans register_sidebar(ici), ne rien mettre si < 2 colones -->
<?php add_theme_support( 'post-thumbnails' ); ?> <!-- Fonction d'ajout d'image à la une -->

<?php

register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );

?>

<?php
    $args = array(
    'width'         => 800,
    'height'        => 540,
    'default-image' => get_template_directory_uri() . '/img/facade.JPG',
    'uploads'       => true,
    );
add_theme_support( 'custom-header', $args );
?>
