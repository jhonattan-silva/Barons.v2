<?php get_header('single'); ?>


   <div id="brn-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <span class="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span><br><br><br>
                <span class="subtitulo"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></span> <br><br><br>
                <img src="<?php echo catch_that_image() ?>" class="img-responsive" />
            </div>
        </div>
    </div>


<div class="container-fluid">
    <div class="row-fluid">
    	<div class="col-md-8 col-md-offset-0">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<p><?php the_content(); ?></p>
    		<?php endwhile;?>
    		<?php else: ?>
    		<?php endif; ?>
            </br>
            <p><?php the_tags( 'Tags do post: ', ' • ', '<br />' ); ?></p>
            </br>
            <!-- Google + -->
            <div class="col-md-2"><g:plusone></g:plusone></div>
            <!-- Twitter -->
            <div class="col-md-2">
                <a href="http://twitter.com/share" class="twitter-share-button"
                    data-url="<?php the_permalink(); ?>"
                    data-text="<?php the_title(); ?>"
                    data-count="vertical"
                    data-size="large">Tweet
                </a>
            </div> <!-- fecha twitter -->
            <!-- Facebook -->
            <div class="col-md-2 fb-like"></div>
            <!-- Whatsapp -->
            <div class="col-md-2 whats"><a href="whatsapp://send?text=<?php the_title(); ?>" data-action="share/whatsapp/share">Share via Whatsapp</a></div>
        </div><!-- fecha o conteudo do post -->

        <?php get_sidebar('single'); ?>
    </div> <!-- Fecha a linha -->
</div> <!-- fecha o container -->



<?php get_footer(); ?>