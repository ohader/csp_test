<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 CSP Test',
    'description' => 'TYPO3 CSP Test',
    'category' => 'be',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'author' => 'Oliver Hader',
    'author_email' => 'oliver.hader@typo3.org',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.2.99-',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
