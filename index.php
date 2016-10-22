<?php get_header(); ?>

    <!-- SECTION DES COURS DE DANCE -->
    <section class="dance-classes">
        <?php query_posts('category_name=coursDance'); ?>
            <?php if(have_posts()) : ?>
                <?php $counter =0; ?>
                    <?php while(have_posts() && $counter<3) : the_post();?>
                        <?php $counter++ ?>

                            <div class="content">
                                <div class="ligne-design">
                                    <div></div>
                                </div>
                                <div class="article-dance">
                                    <!-- affichage des articles -->
                                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="separator-purple"></div>
                                    <div class="post" id="post-<?php the_ID(); ?>">
                                        <div class="post_content">
                                            <?php the_post_thumbnail(array(250,250));?>
                                                <p class="postmetadata">
                                                    <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                                </p>
                                        </div>
                                    </div>
                            </div>
                                    <?php endwhile; ?>
                                        <?php endif; ?>
                                      
                                </div>
                                
                                 <div class="ligne-design">
                                    <div></div>
                                </div>
                                <a href="#"><button type="submit">En SAVOIR plus</button></a>
                                
    </section>


    <?php get_footer(); ?>

        </body>

        </html>