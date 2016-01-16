<!DOCTYPE html>
<html lang="pt-BR"> <!--Fecha no footer-->
    <head>
        <meta name="viewimport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no"><!--função para ajustes mobile-->
        <title>BARONS - Amantes de tudo, especialistas em nada</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!--Ligação do wp para encontrar o css-->
        
        
        <!-- links bootstrap online --!
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/imgs/favicon-16.png" sizes="16x16">
        <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/imgs/favicon32-.png" sizes="32x32">
        <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/imgs/favicon48-.png" sizes="48x48">
        <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/imgs/favicon-64.png" sizes="64x64">
        <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/imgs/favicon-128.png" sizes="128x128">


        <?php wp_enqueue_style('single-style', get_bloginfo('template_directory') . '/css/single-style.css'); ?>
      
        <?php wp_head(); ?>
    </head>



<body>



<!-- CATEGORIAS -->
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

<?php
//identificando qual a categoria 
  $categories = get_the_category();
  $category_id = $categories[0]->cat_ID; 
?>


<<!-- COMEÇA O MENU -->
<div class="container-fluid topo"><!--class pertece ao bootstrap --><!--id="header"-->

  <div class="col-md-3 col-xs-6 col-sm-4 col-md-offset-0 col-sm-offset-0"><a href="<?php bloginfo('url');?>"><h1 class="logotipo">BARONS</h1></a></div>                 
  <div class="col-md-6 col-xs-12 col-sm-7 col-md-offset-3 col-sm-offset-1 botoes">
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
    



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php bloginfo('url');?>"><h1 class="logotipo">BARONS</h1></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo esc_url($link_games); ?>"> GAMES </a></li>
        <li><a href="<?php echo esc_url($link_filmes); ?>">FILMES</a></li>
        <li><a href="<?php echo esc_url($link_series); ?>">SERIES</a></li>
        <li><a href="<?php echo esc_url($link_livros); ?>">LIVROS</a></li>
        <li><a href="<?php echo esc_url($link_hqs); ?>">HQs</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



        

        
        