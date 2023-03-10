<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/edi0th/www/typotheque-prevert/typotheque-prevert/user/themes/typotheque-prevert/blueprints/typotheque.yaml',
    'modified' => 1678440770,
    'size' => 305,
    'data' => [
        'title' => 'Typotheque',
        'extends@' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.custom.nbstyles' => [
                                    'type' => 'text',
                                    'label' => 'Nombres de styles'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
