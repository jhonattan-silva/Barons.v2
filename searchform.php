<!--
Template Name: The Baron Theme
-->

<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
     <div>
         <label for="s" class="screen-reader-text">Buscar:</label>
         <input type="search" id="s" name="s" placeholder="Digite aqui" required />
         <input type="image" id="searchsubmit" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/imgs/busca.png"/>
     </div>
</form>