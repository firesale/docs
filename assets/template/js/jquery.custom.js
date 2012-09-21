$(function() {

	var p = $('nav ul ul').slideUp(0).parent();
	$('<a href="#" class="drop">+</a>').insertBefore(p.find('ul:first'));
	$('.drop').click(function() {
		var t = $(this).text();
		$(this).text(( t == '+' ? '-' : '+' )).parents('li').find('ul').stop().slideToggle();
	});

});