<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TER upload test',
    'description' => 'Dummy extension for testing automatized TER deployments.',
    'category' => 'example',
    'author' => 'Felix Nagel',
    'author_email' => 'info@felixnagel.com',
    'author_company' => '',
    'state' => 'alpha',
    'uploadfolder' => '0',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.21',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
