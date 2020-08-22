<?php return [
    'main' => [
        'GET' => [
            '/' => [
                'controller' => 'index',
                'modifiers'  => ''        
            ],
    
            '/params/@id/@id2' => [
                'controller' => 'params',
                'modifiers'  => 'GET' 
            ]
        ],
        
        'POST' => [
            '/' => [
                'controller' => 'index',
                'modifiers'  => '[ajax]'        
            ],
        ]
    ]
];