<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/edi0th/www/typotheque-prevert/typotheque-prevert/user/themes/typotheque-prevert/blueprints.yaml',
    'modified' => 1679412933,
    'size' => 833,
    'data' => [
        'name' => 'Typotheque Prevert',
        'slug' => 'typotheque-prevert',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'Thème de la typothèque du DNMADE du Lycée Jacques Prévert',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Eleves',
            'email' => 'ahah@hoho.fr'
        ],
        'homepage' => 'https://github.com/eleves/grav-theme-typotheque-prevert',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/eleves/grav-theme-typotheque-prevert/issues',
        'readme' => 'https://github.com/eleves/grav-theme-typotheque-prevert/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
