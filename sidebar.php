<div class="sidebar-completa">
    <div class="sidebar">
        <?php get_search_form(); ?>
    </div>


    <div class="sidebar"> 
        <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
            <ul>
                <h3>TAGS POPULARES</h3>
                <li class="sidebares"><?php wp_tag_cloud( 'smallest=8&largest=22' ); ?></li>
            </ul>
        <?php endif; ?>
    </div>

    <div class="sidebar">
        <ul>
            <h3>DESCUBRA O QUE NÃO PROCURAVA</h3>
            <?php $posts = get_posts('orderby=rand&numberposts=5'); foreach($posts as $post) { ?>
            <li class="sidebares">
                <div class="miniatura"> <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                    <?php the_meta(); ?>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>