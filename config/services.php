<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],

    'github' => [
        'client_id' => '040b35942caa0a599ee6',
        'client_secret' => 'dd99a465dfff6e6eaeee43dd0fa7f96a17afa52f',
        'redirect' => 'http://myspace.laratechielogs.com/github/login',
    ],

    'twitter' => [
        'client_id' => '8TWwAH3JpHvOYFu3quvAfb9zC',
        'client_secret' => 'y4xVwguPObpbgc2v9JisLhABzGGBe5NTXk6AC6atSniuKyuXVQ',
        'redirect' => 'http://myspace.laratechielogs.com/twitter/login',
    ],


	

];
