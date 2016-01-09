<?php get_header(); ?> <!--Equivale ao include, vai chamar o header-->



           
<div class="row main" ><!--class bootstrap--><!--id="main"--> 
<h1 class="tagueado"><?php single_tag_title(); ?></h1>
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
    <?php get_sidebar('single'); ?>

 
</div> <!-- Fim div menu -->





<div class="paginacao"> <!-- Criar os links para mudar as paginas de acordo com a quantidade maxima configurada por pagina-->
    <?php 
    the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Proxima', 'textdomain' ),
    ) ); ?>
</div>
    


<?php get_footer(); ?>