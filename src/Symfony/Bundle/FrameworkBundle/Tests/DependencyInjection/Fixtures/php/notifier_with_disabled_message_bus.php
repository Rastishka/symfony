<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'messenger' => [
        'enabled' => true,
    ],
    'mailer' => [
        'dsn' => 'smtp://example.com',
    ],
    'notifier' => [
        'message_bus' => false,
        'chatter_transports' => [
            'test' => 'null'
        ],
        'texter_transports' => [
            'test' => 'null'
        ],
    ],
]);
