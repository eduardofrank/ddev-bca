<?php

/**
 * Extension Manager/Repository config file for ext "ddev_bca".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'ddev-bca',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\DdevBca\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo Frank',
    'author_email' => 'edfrank@gmail.com',
    'author_company' => 'Eduardo Frank',
    'version' => '1.0.0',
];
