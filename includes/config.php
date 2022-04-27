<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'QUIZ',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            'Q1' => 'Q1',
            'Q2' => 'Q2',
            'Q3' => 'Q3',
            'Q4' => 'Q4',
            'Q5' => 'Q5',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
