

jQuery(document).ready(function() {
    
    
	$('.carousel').carousel({
    	pause: "false", //não pausa quando põe o mouse em cima
    	interval: 7000 //tempo em cada slide
	});

/*
	$('.carousel').css({
        'margin': 0,
        'width': $(window).outerWidth(), //retorna a largura total padding+border xxxxx margin (true)=+margem
        'height': $(window).outerHeight() //retorna a altura total padding+border
    });
	*/
/*    
    $('.item').css({
        'position': 'fixed',
        'width': '100%', 
        'height': '100%'
    });

	
    
    $('.carousel-inner div.item img').each(function() {
		var imgSrc = $(this).attr('src');//a variavel recebe o valor de atributo do src do html
		$(this).parent().css({
            'background': 'url('+imgSrc+') center no-repeat',
            '-webkit-background-size': '100%',
            '-moz-background-size': '100%',
            '-o-background-size': '100%',
            'background-size': '100%',
            'z-index': '-99',
            // cover para manter a img mais esticada possivel
            '-webkit-background-size': 'cover',
            '-moz-background-size': 'cover',
            '-o-background-size': 'cover',
            'background-size': 'cover'
        });
		$(this).remove(); //apaga a img original para deixar somente a resized
	});
*/
    /*
	$(window).on('resize', function() { //cada vez que o tamanho da tela mudar ele vai carregar os tamanhos novamente
		$('.carousel').css({
            'width': $(window).outerWidth(), 
            'height': $(window).outerHeight()});
	});*/



/* ajustando a img do single */
$('.overlay div.content img').each(function() {
        var imgSrc = $(this).attr('src');//a variavel recebe o valor de atributo do src do html
        $(this).parent().css({
            'background': 'url('+imgSrc+') center no-repeat',
            '-webkit-background-size': '100%',
            '-moz-background-size': '100%',
            '-o-background-size': '100%',
            'background-size': '100%',
            'z-index': '-99', /*manter img atras de tudo */
        });
        $(".content>img, .capa").remove(); //apaga a img original para deixar somente a resized
    });



}); 