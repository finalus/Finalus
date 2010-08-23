<?php

$config = array(

    'Database' => array(
        'dev'   => array(
            'driver'     => 'mysql',
            'persistent' => false,
            'host'       => 'localhost',
            'login'      => 'root',
            'password'   => 'root',
            'database'   => 'codilibros',
            'prefix'     => '',
            'encoding'   => 'utf8',
	    'port' 	 => '/Applications/MAMP/tmp/mysql/mysql.sock'
        )
    ), 

    'App' => array(
        'dbMode'        => 'dev',
        'encoding'      => 'UTF-8',
        'baseUrl'       => '',
        'base'          => '',
        'name'          => 'Codilibros',
        'url'           => 'http://codilibros/',
        'theme'         => '',
        'support'       => 'support@domain.com',
        'timezone' 	=> 'America/Santiago',
        'Dob' => array(
            'year_min' => date('Y') - 100,
            'year_max' => date('Y') - 17,

        ),
		'Resize' => array(
			'thumb' 	=> array(
				'directory' => 'img/publicacion/thumb/',
				'width' 	=> 320,
				'height' 	=> 240,
				'phpThumb' 	=> array(
					'far'	=> 1,
					'bg' 	=> 'FFFFFF'
				)
			),
			'max' 		=> array(
				'directory' => 'img/publicacion/max/',
				'width' 	=> 320,
				'height' 	=> 240,
				'phpThumb' 	=> array(
					'zc' 	=> 0,
				)
			)
    	),
		'Api' => array(
		 	'limitIp' => true,
		),
		'Acs4' => array(
			'linkUrl' =>  'http://ebooks.codilibros.com:8080/fulfillment/URLLink.acsm',
			'operatorUrl' => 'http://ebooks.codilibros.com:8080/admin'
		)
	),


    'debug' => 2,

    'Recaptcha' => array(
        'enabled' => true,
        'secure_server' => false,
        'public_key' => '6LeI3gcAAAAAAGn_vy1_e1MUca3SX-DtguDp3vAD',
        'private_key' => '6LeI3gcAAAAAAHwWxEfVtX_4SJFAG0qykpEPTI5a',
    ),

    'Email' => array(
        'IsSMTP'        => true,
        'IsHTML'        => true,
        'SMTPAuth'      => true,
        'SMTPSecure'    => 'ssl',
        'Host'          => 'smtp.gmail.com',
        'Port'          => 465,
        'WordWrap'      => 50,
        'Username'      => '',
        'Password'      => '',
        'From'          => '',
        'FromName'      => '',
        'ReplyTo'       => ''
    ),

);

