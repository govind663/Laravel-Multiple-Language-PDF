<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => 'Coding Thunderbird',
	'subject'               => 'This Document will explain the whole universe.',
	'keywords'              => 'PDF, Laravel, Package, Peace',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => '',
    'font_path' => public_path('fonts/'),
	'font_data' => [
        'Marathi' => [
            'R'  => 'Mukta-Regular.ttf',    // Mukta regular font
            'B'  => 'Mukta-Bold.ttf',       // optional: Mukta bold font
            'I'  => 'Mukta-Medium.ttf',     // optional: Mukta Medium font
            'L' => 'Mukta-Light.ttf', // optional: Mukta Light font
            //'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ]
	]

];
