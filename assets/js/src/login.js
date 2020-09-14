jQuery( document ).ready( function($) {

	var a = '<p>All fields are required.</p>';

	$('#signin').click( function() {
		$('#error').html('');
		var email = $('#email').val();
		var password = $('#password').val();

		if ( email == '' || password == '' ) {
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