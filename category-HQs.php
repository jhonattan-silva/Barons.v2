<?php get_header('single'); ?>
	
	<div class="container-fluid">
		<div class="row categoria">
			<h1 class="cat8"> Historias em Quadrinhos </h1>
		</div>
	</div>

	<div class="row-fluid categoria">
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
	</div> <!-- Fim row -->


<?php get_footer(); ?>