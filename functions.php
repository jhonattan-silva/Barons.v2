<?php
//remover informações desnecessarias
remove_action ('wp_head', 'wp_generator');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'rsd_link');
?>

<?php 
    // Registrar áreas de widgets
    function theme_widgets_init() {
        register_sidebar( array (
             'name' => 'widget_dir_1',
             'id' => 'widget_dir_1',
             'before_widget' => '<div>',
             'after_widget' => '</div>',
             'before_title' => '<h3>',
             'after_title' => '</h3>',
      ) );
    } 
add_action( 'init', 'theme_widgets_init' );
?>



<?php 
//add o thumbnail nos posts
    add_theme_support('post-thumbnails');
?>


<?php 
//Usando o analytics
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
// Cole o código do Google Analytics aqui
<?php } ?>


<?php
//reduzindo para 20 palavras o resumo
function new_excerpt_length($length) {
    return 20; 
}
	add_filter('excerpt_length', 'new_excerpt_length');
?>




<?php

function meu_js() {
  wp_deregister_script('jquery');
  wp_register_script('jquery-antigo', ("http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"), false, '1.10.0');
  wp_enqueue_script('jquery-antigo');
    wp_register_script('jquery-carousel', get_template_directory_uri().'/js/meus_scripts.js', array('jquery-antigo'));
    wp_enqueue_script('jquery-carousel');
wp_register_script('jquery-bootstrap', ("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"), array('jquery-antigo'), '3.3.5');
wp_enqueue_script('jquery-bootstrap');
}add_action('wp_enqueue_scripts', 'meu_js');
?>

<?php
/*function meu_js() {
  wp_register_script('meus_scripts', get_template_directory_uri().'/js/meus_scripts.js', array(), '1.0.0', true );
  wp_enqueue_script('meus_scripts');
  wp_register_script('jquery-bootstrap', ("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"), array('jquery'), '3.3.5');
  wp_enqueue_script('jquery-bootstrap');
}
add_action( 'wp_enqueue_scripts', 'meu_js' );  
*/?>



<?php
//pegar a primeira imagem do ultimo post
function img_principal($num_cat) {
  global $post, $posts;
  $img_cartaz = '';
  ob_start(); //inicia o buffer
  ob_end_clean(); //termina e limpa o buffer
    
    $the_query = new WP_Query( "cat=$num_cat" );
    $pega = $the_query->the_post();
    
                            //pattern (/o que estou procurando/) , subject(onde procurar), match(armazena array com o resultado)
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches); 
  $img_cartaz = $matches [1] [0]; //se encontrou o valor será 1 na primeira variavel e na segunta é a img ou seja a 1º "0"
    
    
  if(empty($img_cartaz)){ //Caso não tenha imagem no post ele vai usar essa como padrão
    $img_cartaz = "/images/default.jpg";
  }
  return $img_cartaz;
}
wp_reset_postdata();
?>



<?php
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}
?>

