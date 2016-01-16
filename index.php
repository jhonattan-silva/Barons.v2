<?php get_header(); ?> <!--Equivale ao include, vai chamar o header-->


<!-- CARROSSEL  *#*#*#**#*#**#*#**#*#*#*#**#**#*#**#*#**#*#*#**#*#*#**#**-->
    <div id="carousel" class="carousel slide container-fluid" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo img_principal("7") ?>" alt="" />
                    <div class="carousel-caption">
                        <span class="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span>
                        <span class="subtitulo"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></span> 
                    </div>
            </div>
            
           <div class="item">
                <img src="<?php echo img_principal("2") ?>" alt="" />
                    <div class="carousel-caption">
                        <span class="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span>
                        <span class="subtitulo"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></span>
                    </div>
            </div>

            <div class="item">
                <img src="<?php echo img_principal("9") ?>" alt="" />
                    <div class="carousel-caption">
                        <span class="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span>
                        <span class="subtitulo"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></span>
                    </div>
            </div>

            <div class="item">
                <img src="<?php echo img_principal("4") ?>" alt="" /> 
                    <div class="carousel-caption">
                        <span class="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span>
                        <span class="subtitulo"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></span>
                    </div>
            </div>
            
            <div class="item">
                <img src="<?php echo img_principal("8") ?>" alt="" />
                    <div class="carousel-caption">
                        <span class="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span>
                        <span class="subtitulo"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></span>
                    </div>
            </div>

            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
  
    
<!-- FIM CARROSSEL *#*#*#**#*#**#*#**#*#*#*#**#**#*#**#*#**#*#*#**#*#*#**#**-->


           
<div class="row-fluid main" ><!--class bootstrap--><!--id="main"--> 
    <div class="col-md-8 conteudo"> <!--class bootstrap--><!--id="conteudo"-->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- comandos do wp, para verificar se tem posts para mostrar--> 
        <div id="post-<?php the_ID(); ?>" <?php post_class("col-md-5"); ?>> <!-- cmd para identificar a categoria e criar a classe com o nome + a classe md-5 -->
            <div class="thumbnail"><?php the_post_thumbnail(array(350, 200)); ?></div><!--img do post-->
                <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h3> <!-- Chama o titulo do post--><!-- permalink faz ele linkar com o post correspondente-->
                <p> <?php the_excerpt(); ?> </p> <!--the_content(); Chama o conteudo do post, ja o excerpt mostra o resumo-->
        </div>
        <?php endwhile; ?>    
        <?php else: ?>
        <?php endif; ?>
    </div> <!-- Fim div conteudo -->    
    <?php get_sidebar(); ?>

 
</div> <!-- Fim row -->





<div class="col-md-12 paginacao"> <!-- Criar os links para mudar as paginas de acordo com a quantidade maxima configurada por pagina-->
    <?php 
    the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Proxima', 'textdomain' ),
    ) ); ?>
</div>
    


<?php get_footer(); ?>