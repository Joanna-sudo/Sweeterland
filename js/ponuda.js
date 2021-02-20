$('document').ready(function (){
	$('.ponuda').slideUp(1);

	$('.po').on('click', function (){
		$(this).toggleClass('po_clicked');
		$('.ponuda').slideToggle();
	});
})