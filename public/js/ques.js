$('.nav_holder').on('click', '.pad', function(){
	// console.log($(this).find('.buttons'));
	$this = $(this);
	$bros = $this.siblings('.pad');
	$this.find('.buttons')
			.toggle();
		// 	.end()
		// .siblings('.pad')
		// 	.find('.buttons')
		// 	.addClass('hidden');
		// console.log($(this).siblings('.pad'));

});

$('.que_edit').click(function(e){
	e.preventDefault();
	$('#edit_modal').modal();
	$this = $(this);
	console.log($this.attr('href'));
	$.ajax({
		url: $this.attr('href'),
		method: 'GET',
		success: function(data){
			console.log(data);
			$('#edit_modal .form_body').html(data);

				$id = parseInt(data.right_answer);
			// console.log($('#rights').children('option').eq($id+1));
			// console.log('attr-action', $this.find('a.que_edit').data('action'));
			// console.log('who is this?', $this.find('a.que_edit'));
			$('#edit_modal form').attr('action', $this.find('a.que_edit').data('action'));
			$('#edit_modal #question').val(data.question);
			$('#edit_modal #choice_a').val(data.choices[0]);
			$('#edit_modal #choice_b').val(data.choices[1]);
			$('#edit_modal #choice_c').val(data.choices[2]);
			$('#edit_modal #choice_d').val(data.choices[3]);
			$('#rights').children('option').removeAttr('selected');
			$('#rights').children('option').eq($id+1).attr('selected','selected');
			$('select').material_select();
		}
	});
});

$('body #question_edit_form').submit(function(e){
	e.preventDefault();
	var $this = $(this);
	console.log($this.attr('action'));
	$.ajax({
		url: $this.attr('action'),
		method: 'PATCH',
		data: $this.serialize(),
		success: function(data){
			console.log(data);
			$('#edit_modal').modal('close');
  			Materialize.toast('Question Editted!',3000,'orange darken-3');
  			window.location.reload();

		}
	});

});

$('.que_delete').click(function(e){
	e.preventDefault();
	$this = $(this);
	console.log($this.attr('href'));
	$.ajax({
		url: $this.attr('href'),
		// data: {  
		//    "_token": "{{ csrf_token() }}",
		// },
		// method: 'DELETE',
		success: function(data){
			console.log(data);
			// $this.closest('.pad').remove();
		}
	});
});
$('select').material_select();
$('#new_que').click(function(e) {
	$('#newQue_modal').modal();
});

$('#new_que_form').submit(function(e) {
	e.preventDefault();
	var form = $(this);
	console.log(form.attr('action'));
	form.find('.loader').html('').append(`
	  <div class="progress animated slidInUp" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);
		url = form.attr('action'),
		method = 'POST';
	$.ajax({
		url: url,
		method: method,
		data: form.serialize(),
		complete:function(){
			form.find('.progress').remove();
		},
		success: function(data) {
			console.log(data);
			$('#newQue_modal').modal('close');
  			Materialize.toast('New Question Added!',3000,'orange darken-3');
  			window.location.reload();
		}

	});
});