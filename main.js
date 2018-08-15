
$(document).ready(function(){
	var altura = $('.botonera').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.botonera').addClass('botonera-fixed');
		} else {
			$('.botonera').removeClass('botonera-fixed');
		}
	});
 
});