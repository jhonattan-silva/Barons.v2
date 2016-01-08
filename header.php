<!DOCTYPE html>
<html lang="pt-BR"> <!--Fecha no footer-->
    <head>
        <meta name="viewimport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no"><!--função para ajustes mobile-->
        <title>BARONS - Amantes de tudo, especialistas em nada</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!--Ligação do wp para encontrar o css-->
        
        
        <!-- links bootstrap online --!
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
      
        <?php wp_head(); ?>
    </head>
    
<?php 
//referenciando as categorias
$id_games = get_cat_ID( 'games' );
$id_filmes = get_cat_ID( 'filmes' );
$id_series = get_cat_ID( 'series' );
$id_livros = get_cat_ID( 'livros' );
$id_hqs = get_cat_ID( 'hqs' );
    
$link_games = get_category_link( $id_games );
$link_filmes = get_category_link( $id_filmes );
$link_series = get_category_link( $id_series );
$link_livros = get_category_link( $id_livros );
$link_hqs = get_category_link( $id_hqs );
?>
    
<body class="homie"> <!--fecha depois tambem-->


<!-- COMEÇA O MENU -->
<div class="container-fluid topo"><!--class pertece ao bootstrap --><!--id="header"-->

	<div class="col-md-3 col-md-offset-0"><a href="<?php bloginfo('url');?>"><h1 class="logotipo">BARONS</h1></a></div>                 
	<div class="col-md-6 col-md-offset-3 botoes">
		<div class="btn_inteiro">
			<div class="btn_fora">
				<a href="<?php echo esc_url($link_games); ?>">
					<div class="btn_dentro games">
					    <span>GAMES</span><img src="http://i57.tinypic.com/2a5yg7a.png" alt="" />
					</div>	
				</a>
			</div>
		</div>

		<div class="btn_inteiro">
			<div class="btn_fora">
				<a href="<?php echo esc_url($link_filmes); ?>">
					<div class="btn_dentro filmes">
						<span>FILMES</span><img src="http://i59.tinypic.com/t8srhg.png" alt="" />
					</div>
				</a>
			</div>
		</div>

		<div class="btn_inteiro">
			<div class="btn_fora">
				<a href="<?php echo esc_url($link_series); ?>">			
					<div class="btn_dentro series">
						<span>SERIES</span><img src="http://i61.tinypic.com/j5xkbb.png" alt="" />
					</div>	
				</a>
			</div>
	    </div>
	    
	    <div class="btn_inteiro">
			<div class="btn_fora">
				<a href="<?php echo esc_url($link_livros); ?>">			
					<div class="btn_dentro livros">
						<span>LIVROS</span><img src="http://i62.tinypic.com/33f9k0l.png" alt="" />
					</div>	
				</a>
			</div>
	    </div>
	    
	    <div class="btn_inteiro">
			<div class="btn_fora">
				<a href="<?php echo esc_url($link_hqs); ?>">			
					<div class="btn_dentro HQs">
						<span>HQs</span><img src="http://i58.tinypic.com/2hef3eo.jpg" alt="" />
					</div>	
				</a>
			</div>
	    </div>    
	</div>
</div><!-- FIM DO MENU -->
    






        

        
        