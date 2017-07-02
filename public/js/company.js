$('body #job_save').click(function(e) {
	e.preventDefault();
	var form = $('#job_form'),
		url = form.attr('action'),
		method = 'POST';

	form.find('.loader').html('').append(`
	  <div class="progress animated slidInUp" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);

	$.ajax({
		url: url,
		method: method,
		data: form.serialize(),
		complete: function(){
			form.find('.progress').remove();
				},
		success: function(data){
			Materialize.toast('Vancant Job has been added!',3000);
			form.trigger('reset');
			$('#job_modal').modal('close');
			console.log(data);
		window.location.reload();
		}
	});

});
$('#new_job').click(function(e) {
	e.preventDefault();
	$('#job_modal').modal();
});

$('.new_exam').click(function(e) {
	e.preventDefault();
	$this = $(this);
	$('#exam_modal').modal();
	 var url = '/company/exam/'+$this.attr('href');
	 $('#exam_modal form').attr('action', url)
});

$('#exam_modal form').submit(function(e) {
	e.preventDefault();
	var form = $(this);
	console.log(form.attr('action'));
	form.find('.loader').html('').append(`
	  <div class="progress animated slidInUp" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);
	$.ajax({
		url: form.attr('action'),
		method: 'POST',
		data: form.serialize(),
		complete: function(){
			$('#exam_modal .progress').remove();
		},
		success: function(data){
			
			$('#exam_modal').modal('close');
			$('.jobs, .exams, .applicants').addClass('hidden');
			$('.new_question').removeClass('hidden')
							.children('.form_body').html(data);	
			$('select').material_select();
		}
	});
});

$('#q_save').click(function(e) {
	e.preventDefault();
	var form = $('#q_form'),
		url = form.attr('action'),
		method = 'POST';
	console.log(form.attr('action'));
	$.ajax({
		url: url,
		method: 'POST',
		data: form.serialize(),
		success: function() {
			Materialize.toast('Question has been Added!',3000,'orange');
			form.trigger('reset');
		}

	});
});

$('.tables .hider').click(function(e){
	e.preventDefault();
	$this = $(this);
	// console.log($this.siblings('table'));
	$this.siblings('table').toggle();
})