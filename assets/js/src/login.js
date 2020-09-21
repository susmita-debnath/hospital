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

		$.ajax({
			url: 'http://hospital.test/ajax/login',
			method: 'POST',
			dataType: 'JSON',
			data: {
				email: email,
				password: password
			},
			success: function( response ) {
				console.log( response );
				$('#error').html(response);
				if ( response.code === 1 ) {
					window.location = "http://hospital.test/dashboard";
				}
				$('#error').addClass('alert alert-danger');

				$('html, body').animate({
					scrollTop: $('#error').offset().top
				});
			}
		});

		return false;

	} );
} );