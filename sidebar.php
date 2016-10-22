<?php //... ?>
    <div class="sidebar">
        <ul>
            <li id="search"><?php include(TEMPLATEPATH . '/searchform.php'); ?></li>
            <li id="calendar"><h2>Calendrier</h2><?php get_calendar(); ?></li>
            <li><h2>Categories</h2><ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?></ul></li>
            <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
            <li><h2>Archives</h2>   <ul> <?php wp_get_archives('type=monthly'); ?>   </ul> </li>
            <!--<li><h2>Infos Meta</h2>   <ul> <?php wp_register(); ?> <li><?php wp_loginout(); ?></li> <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML valide</abbr></a></li> <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li> <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li> <li><a href="http://wordpress-fr.net/" title="Communauté française de WordPress et WPmu.">WordPress Francophone</a></li> <?php wp_meta(); ?>   </ul> </li>-->
        </ul>
        
        <ul>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                <!-- CONTENU DE LA SIDEBAR -->
            <?php endif; ?>
        </ul>
    </div>
    
    