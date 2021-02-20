$('document').ready(function(){
	$('#responsive_nav').slideUp(1);

	$('#ikonica').on('click', function(){
		$(this).toggleClass('clicked');
		$('#responsive_nav').slideToggle();
	});
})