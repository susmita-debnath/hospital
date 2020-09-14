jQuery( document ).ready( function($){
	var max = 0;
	$( '.equalHeight' ).each( function(){
		let height = $( this ).height();
		if ( height > max ) max = height;
	} );

	$( '.equalHeight' ).height(max);
} );