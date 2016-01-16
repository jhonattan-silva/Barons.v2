<?php get_header(); ?>


  
        <div class="overlay">
            <div class="content">
                <span class="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span><br><br><br>
                <span class="subtitulo"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></span> <br><br><br>
                <img src="<?php echo catch_that_image() ?>" class="img-responsive" />
            </div>
        </div>
    


<div class="container-fluid">
    <div class="row-fluid">
    	<div class="col-md-8 col-md-offset-0 texto">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<p><?php the_content(); ?></p>
    		<?php endwhile;?>
    		<?php else: ?>
    		<?php endif; ?>
            </br>
            <p><?php the_tags( 'Tags do post: ', ' • ', '<br />' ); ?></p>
            </br>


<!-- BOTÕES SOCIAIS -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

    <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>


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
            <div class="col-md-2 fb-like" data-layout="button_count"></div>
            <div class="col-md-2 fb-share-button" data-layout="button"></div>
            <!-- Whatsapp -->
            <div class="col-md-2 whats"><a href="whatsapp://send?text=<?php the_title(); ?>" data-action="share/whatsapp/share">Share via Whatsapp</a></div>
        </div><!-- fecha o conteudo do post -->

        <?php get_sidebar('single'); ?>
    </div> <!-- Fecha a linha -->
</div> <!-- fecha o container -->



<?php get_footer(); ?>