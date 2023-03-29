<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SitePackage',
    'description' => 'Provides site package for page',
    'state' => 'stable',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.pl',
    'category' => 'fe',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
