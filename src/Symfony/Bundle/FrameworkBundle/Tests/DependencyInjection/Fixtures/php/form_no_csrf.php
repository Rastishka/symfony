<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'form' => [
        'csrf_protection' => [
            'enabled' => false,
        ],
    ],
]);
