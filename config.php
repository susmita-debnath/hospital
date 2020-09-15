<?php

	$whitelist = array(
		'127.0.0.1',
		'::1'
	);

	if ( ! in_array( $_SERVER['REMOTE_ADDR'] , $whitelist ) ) {
		if ( ! defined( 'DB_HOST' ) ) define( 'DB_HOST', 'localhost' );
		if ( ! defined( 'DB_USER' ) ) define( 'DB_USER', 'bappidgr_hospita' );
		if ( ! defined( 'DB_PASSWORD' ) ) define( 'DB_PASSWORD', '0,Wc1CxSgplR' );
		if ( ! defined( 'DB_NAME' ) ) define( 'DB_NAME', 'bappidgr_hospital' );
		if ( ! defined( 'BASE_URL' ) ) define('BASE_URL', 'bappi-d-great.com/hospital');
	    if ( ! defined( 'TABLE_PREFIX' ) ) define('TABLE_PREFIX', 'hp_');
	}
	else {
		if ( ! defined( 'DB_HOST' ) ) define( 'DB_HOST', 'localhost' );
		if ( ! defined( 'DB_USER' ) ) define( 'DB_USER', 'root' );
		if ( ! defined( 'DB_PASSWORD' ) ) define( 'DB_PASSWORD', '' );
		if ( ! defined( 'DB_NAME' ) ) define( 'DB_NAME', 'hospital' );
		if ( ! defined( 'BASE_URL' ) ) define('BASE_URL', 'hospital.test');
		if ( ! defined( 'TABLE_PREFIX' ) ) define('TABLE_PREFIX', 'hp_');
	}