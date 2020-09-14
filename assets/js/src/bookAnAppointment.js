jQuery( document ).ready( function($) {

	var a = '<p>All fields are required.</p>';

	$('#book_now').click( function() {
		$('#error').html('');
		var speciality = $('#speciality').val();
		var doctor = $('#doctor').val();

		if ( speciality == '' || doctor == '' ) {
			$('#error').append(a);

			$('#error').addClass('alert alert-danger');

			$('html, body').animate({
				scrollTop: $('#error').offset().top

			});

			return false;
		}

		$('#error').removeClass('alert alert-danger');

		return false;

	} );
} );
