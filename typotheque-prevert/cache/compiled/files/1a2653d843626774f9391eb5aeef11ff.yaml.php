<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/edi0th/www/typotheque-prevert/typotheque-prevert/user/themes/typotheque-prevert/blueprints/typographie.yaml',
    'modified' => 1678375919,
    'size' => 1167,
    'data' => [
        'title' => 'Typographie',
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
                                ],
                                'header.custom.auteur' => [
                                    'type' => 'text',
                                    'label' => 'Auteur(s)'
                                ],
                                'header.custom.datesortie' => [
                                    'type' => 'text',
                                    'label' => 'Date'
                                ],
                                'header.custom.licence' => [
                                    'type' => 'text',
                                    'label' => 'Licence'
                                ],
                                'header.custom.archivezip' => [
                                    'type' => 'file',
                                    'label' => 'Archive ZIP/RAR du fichier font',
                                    'destination' => '@self/fichiersfontes',
                                    'filesize' => 100,
                                    'accept' => [
                                        0 => '.zip',
                                        1 => '.rar'
                                    ]
                                ],
                                'header.custom.fichiertypo' => [
                                    'type' => 'file',
                                    'label' => 'Fichier WOFF/WOFF2 pour affiche sur le site',
                                    'destination' => '@self/fichiersfontes',
                                    'filesize' => 1000,
                                    'accept' => [
                                        0 => '.otf',
                                        1 => '.ttf',
                                        2 => '.woff',
                                        3 => '.woff2'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
