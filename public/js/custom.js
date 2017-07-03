 $('.parallax').parallax();
 
$('a').click(function(e){
	e.preventDefault;
});

$('.company_login').click(function(e) {
	e.preventDefault();
	$('#company_login_modal').modal();
	$('form').trigger('reset');
});

$('#company_login_btn').click(function(e) {
	e.preventDefault();
	var form = $('#company_login_form'),
		url = form.attr('action'),
		method = 'POST';

	// reset error messages..
	form.find('.red-text').remove();
	form.find('input').removeClass('invalid');
	form.find('.loader').html('').append(`
	  <div class="progress animated slidInUp" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);

	$.ajax({
		url: url,
		method: method,
		data: form.serialize(),
		complete:function(){
			form.find('.progress').remove();
		},
		success: function(response){
			$('#company_login_modal').modal('close');
			window.location.href = form.attr('action');
		},
		error: function(xhr) {
			var errors = xhr.responseJSON;
			if ($.isEmptyObject(errors) == false) {
				
			    $.each(errors, function(key, value) {
			        $('#' + key)
			            .addClass('invalid')
			            .after('<span class="red-text"><strong>' +value + '</strong></span>')
			    });
			}
		}
	});
});

$('.applicant_login').click(function(e) {
	e.preventDefault();
	$('#applicant_login_modal').modal();
	$('form').trigger('reset');

});

$('#applicant_login_btn').click(function(e) {
	e.preventDefault();
	var form = $('#applicant_login_form'),
		url = form.attr('action'),
		method = 'POST';
	// reset error messages..
	form.find('.red-text').remove();
	form.find('input').removeClass('invalid');
	form.find('.loader').html('').append(`
	  <div class="progress animated slidInUp" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);
	console.log(form.serialize());

	$.ajax({
		url: url,
		method: method,
		data: form.serialize(),
		complete:function(){
			form.find('.progress').remove();
		},
		success: function(response){
			$('#applicant_login_modal').modal('close');
			window.location.href = form.attr('action');
		},
		error: function(xhr) {
			var errors = xhr.responseJSON;
			if ($.isEmptyObject(errors) == false) {
			    $.each(errors, function(key, value) {
			        $('#' + key+'_app')
			            .addClass('invalid')
			            .after('<span class="red-text"><strong>' +value + '</strong></span>')
			    });
			}
		}
	});
});

$('.company_register').click(function(e) {
	e.preventDefault();
	$('#company_register_modal').modal();
	$('form').trigger('reset');

});

$('#company_register_btn').click(function(e) {
	e.preventDefault();
	var form = $('#company_register_form'),
		url = form.attr('action'),
		method = 'POST';
		// Materialize.toast('Registeration Completed!',3000,'green darken-3');

	// reset error messages..
	form.find('.red-text').remove();
	form.find('input').removeClass('invalid');

	form.find('.loader').html('').append(`
		  <div class="progress animated slidInUp" >
		      <div class="indeterminate" style="margin-top:15px;"></div>
		  </div>
	`);

  	$.ajax({
  		url: url,
  		method: method,
  		data: form.serialize(),
  		complete:function(){
			form.find('.progress').remove();
		},
  		success: function(data) {
  			$('#company_register_modal').modal('close');
  			window.location.href = form.attr('action');
  		},
		error: function(xhr) {
			var errors = xhr.responseJSON;
			if ($.isEmptyObject(errors) == false) {
			    $.each(errors, function(key, value) {
			        $('#' + key+'_cr')
			            .addClass('invalid')
			            .after('<span class="red-text"><strong>' +value + '</strong></span>')
			    });
			}
		}
  	});

});

$('.applicant_register').click(function(e) {
	e.preventDefault();
	$('#applicant_register_modal').modal();
	$('form').trigger('reset');
	
});

$('#applicant_register_btn').click(function(e) {
	e.preventDefault();
		var form = $('#applicant_register_form'),
			url = form.attr('action'),
			method = 'POST';
			// Materialize.toast('Registeration Completed!',3000,'green darken-3');

		// reset error messages..
		console.log(form.serialize());
		form.find('.red-text').remove();
		form.find('input').removeClass('invalid');

		form.find('.loader').html('').append(`
			  <div class="progress animated slidInUp" >
			      <div class="indeterminate" style="margin-top:15px;"></div>
			  </div>
		`);

	  	$.ajax({
	  		url: url,
	  		method: method,
	  		data: form.serialize(),
	  		complete:function(){
				form.find('.progress').remove();
			},
	  		success: function(data) {
	  			$('#company_register_modal').modal('close');
	  			window.location.href = form.attr('action');
	  		},
			error: function(xhr) {
				var errors = xhr.responseJSON;
				if ($.isEmptyObject(errors) == false) {
				    $.each(errors, function(key, value) {
				        $('#' + key+'_apr')
				            .addClass('invalid')
				            .after('<span class="red-text"><strong>' +value + '</strong></span>')
				    });
				}
			}
	  	});
});

$('select').material_select();

$('#que_save').click(function(e) {
	e.preventDefault();
	var form = $('#question_form'),
		url = form.attr('action'),
		method = 'POST';
	console.log(form.serialize());
	$.ajax({
		url: url,
		method: method,
		data: form.serialize(),
		success: function(data) {
			console.log(data);
  			Materialize.toast('Registeration Completed!',3000,'green darken-3');
  	
		}

	});
});

$('#job_save').click(function(e) {
	e.preventDefault();
	var form = $('#job_form'),
		url = form.attr('action'),
		method = 'POST';
		console.log(form.serialize());
	// $.ajax({
	// 	url : url,
	// 	method: method,
	// 	data: form.serialize(),
	// 	success: function(data) {
	// 		console.log(data);
 //  			Materialize.toast('New Job Created!',2000,'green darken-3');
 //  			$('.job_div').addClass('hidden');
	// 		$('.question_div').removeClass('hidden');
	// 		console.log(data);

	// 	}
	// });
});

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

$('#add_job').click(function(e) {
	e.preventDefault();
	$('.job_div').removeClass('hidden');
	$('.question_div').addClass('hidden');
});

$('#create_exam').click(function(e) {
	e.preventDefault();
	
	$('.job_div').addClass('hidden');
	$('.question_div').removeClass('hidden');
});