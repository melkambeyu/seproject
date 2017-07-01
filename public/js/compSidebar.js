$('.section').click(function(e){
	e.preventDefault();
	$this = $(this);
	$this.closest('.side_bar')
				.find('.orange').removeClass('orange');
	$this.addClass('orange');

	// switching
	$id = $this.attr('id');
	$('.'+$id).removeClass('hidden')
		.siblings('.row')
		.addClass('hidden');
});

