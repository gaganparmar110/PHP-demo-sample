<?php


function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'site_url' => 'http://localhost/myphpproject',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
