<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/edi0th/www/typotheque-prevert/typotheque-prevert/user/accounts/etudiant.yaml',
    'modified' => 1678440704,
    'size' => 520,
    'data' => [
        'state' => 'enabled',
        'email' => 'contact@etudiant.com',
        'fullname' => 'etudiant',
        'language' => 'en',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'QHXVBNUHJU5RORD74TSY3TOM57P4MJAB',
        'avatar' => [
            
        ],
        'hashed_password' => '$2y$10$exTEvj9i1OGlrzLbqqdPI.ollQS2baFOvWupFLDRBmE4PV2f/ABSi',
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true
            ]
        ]
    ]
];
