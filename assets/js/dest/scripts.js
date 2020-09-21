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

jQuery( document ).ready( function($){
	var max = 0;
	$( '.equalHeight' ).each( function(){
		let height = $( this ).height();
		if ( height > max ) max = height;
	} );

	$( '.equalHeight' ).height(max);
} );
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
function validateEmail(email) {
	const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function specialChecking(l, password) {
	var i;

	for ( i = 0; i < l; i++ ) {
		var a = password.charCodeAt(i);
		if( (a >= 32 && a <= 47) || (a >= 58 && a <= 64) || (a >= 91 && a <= 96 ) || (a <= 123 && a <= 126) ) return true;
	}

	return false;
}

function numberChecking(l, password) {
	var i;

	for( i = 0; i < l; i++ ) {
		if ( password[i] >= 0 && password[i] <= 9 ) return true; 
	}

	return false;
}

function letterChecking(l, password) {
	var i, flag1 = 0, flag2 = 0;

	for ( i = 0; i < l; i++) {
		if( flag1 == 0 && password[i] >= 'A' && password[i] <= 'Z' ) flag1 = 1;
		if( flag2 == 0 && password[i] >= 'a' && password[i] <= 'z' ) flag2 = 1;

		if ( flag1 == 1 && flag2 == 1 ) return true; 
	}

	return false;
}

function validatePassword(password) {
	var length = password.length;

	if( length > 7 && letterChecking(length, password) && numberChecking(length, password) && specialChecking(length, password) ) return true;

	return false;
}

jQuery( document ).ready( function($){

	$('#datepicker').datepicker({
        changeYear: true,
        yearRange: "1900:2020",
        dateFormat : 'yy-mm-dd',
        maxDate : 0
	}).attr('readonly','readonly');

	var pwerr = '<p>Please provide the password in following format:</p>';
		pwerr += '<ul>';
			pwerr += '<li>Minimum 8 characters</li>';
			pwerr += '<li>Minimum 1 number</li>';
			pwerr += '<li>Minimum 1 uppercase letter & 1 lowercase letter </li>';
			pwerr += '<li>Minimum 1 special character</li>';
		pwerr += '</ul>';
	var errors = ['<p>All fields are required.</p>', '<p>Email is invalid.</p>', pwerr, '<p>Password is not same</p>', '<p>The email has already been taken.</p>'];

	$('#signup').click( function(){
		$('#error').html('');
		var errorStatus = [];
		var name = $('#name').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var retype = $('#retype').val();
		var date = $('#datepicker').val();
		var mobile = $('#mobile').val();
		var gender = $('input[name=gender]:checked').val();
		var address = $('#address').val();

		// Field common validation
		if( email == '' || name == '' || password == '' || retype == '' || date == '' || mobile == '' || address == '' || gender == '' ) errorStatus.push(0);

		//Email validation
		if( false === validateEmail(email) ) errorStatus.push(1);

		//Password validation
		if( false === validatePassword(password) ) errorStatus.push(2);

		//Retype password check
		if( password !== retype ) errorStatus.push(3);

		// Unique email check
		//if ( false === uniquenessChecking(email) ) errorStatus.push(3);
		//alert(uniquenessChecking(email));

		if ( errorStatus.length !== 0 ) {
			var i;

			for( i = 0; i <= errorStatus.length; i++ ) {
				$('#error').append(errors[errorStatus[i]]);
			}

			$('#error').addClass('alert alert-danger');

			$('html, body').animate({
				scrollTop: $('#error').offset().top
			});

			return false;
		}

		$('#error').removeClass('alert alert-danger');

		$.ajax({
			url: 'http://hospital.test/ajax/register',
			method: 'POST',
			dataType: 'JSON',
			data: {
				name: name,
				email: email,
				password: password,
				date: date,
				mobile: mobile,
				gender: gender,
				address: address
			},
			success: function( response ) {
				console.log( response.message );
				$('#error').html(response.message);
				if ( response.code === 1 ) $('#error').addClass('alert alert-success');
				else $('#error').addClass('alert alert-danger');

				$('html, body').animate({
					scrollTop: $('#error').offset().top
				});
			}
		});

		return false;
	});
} );