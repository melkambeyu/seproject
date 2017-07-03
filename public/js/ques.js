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
			$('#edit_modal #question_eq').val(data.question);
			$('#edit_modal #a').val(data.choices[0]);
			$('#edit_modal #b').val(data.choices[1]);
			$('#edit_modal #c').val(data.choices[2]);
			$('#edit_modal #d').val(data.choices[3]);
			$('#right_answer_eq').children('option').removeAttr('selected');
			$('#right_answer_eq').children('option').eq($id+1).attr('selected','selected');
			$('select').material_select();
		}
	});
});

$('body #question_edit_form').submit(function(e){
	e.preventDefault();
	var $this = $(this);

//remove error messages
$this.find('.red-text').remove();
	$this.find('input').removeClass('invalid');

	$this.find('.loader').html('').append(`
	  <div class="progress" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);
	console.log($this.attr('action'));
	$.ajax({
		url: $this.attr('action'),
		method: 'PATCH',
		data: $this.serialize(),
		complete: function(){
			$('.progress').remove();
		},
		success: function(data){
			console.log(data);
			$('#edit_modal').modal('close');
  			Materialize.toast('Question Editted!',3000,'orange darken-3');
  			window.location.reload();
		},
		error: function(xhr) {
			var errors = xhr.responseJSON;
			if ($.isEmptyObject(errors) == false) {
				
			    $.each(errors, function(key, value) {
			        $('#' + key+'_eq')
			            .addClass('invalid')
			            .after('<span class="red-text"><strong>' +value + '</strong></span>')
			    });
			}
		}
	});

});

$('.que_delete').click(function(e){
	e.preventDefault();
	$this = $(this);
	console.log($this.attr('href'));
	$.ajax({
		url: $this.attr('href'),
		success: function(data){
			$this.closest('.pad').remove();
  			Materialize.toast('Question Deleted!',3000,'red darken-3');
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

	//remove error message
	form.find('.red-text').remove();
	form.find('input').removeClass('invalid');
	form.find('.loader').html('').append(`
	  <div class="progress" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);
		url = form.attr('action'),
		method = 'POST';
		console.log(form.serialize());
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
		},
		error: function(xhr) {
			var errors = xhr.responseJSON;
			if ($.isEmptyObject(errors) == false) {
				
			    $.each(errors, function(key, value) {
			        $('#' + key+'_nq')
			            .addClass('invalid')
			            .after('<span class="red-text"><strong>' +value + '</strong></span>')
			    });
			}
		}

	});
});