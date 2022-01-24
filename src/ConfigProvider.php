<?php

declare(strict_types=1);
/**
 * This file is part of StruHyperfUi.
 */
namespace Stru\StruHyperfUi;


class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'public',
                    'description' => 'The css for app.',
                    'source' => __DIR__ . '/../public/css/app.css',
                    'destination' => BASE_PATH . '/public/css/app.css',
                ],
                [
                    'id' => 'view',
                    'description' => 'The view for auth.',
                    'source' => __DIR__ . '/../views/layouts/app.blade.php',
                    'destination' => BASE_PATH . '/resources/views/layouts/app.blade.php',
                ],
                [
                    'id' => 'view',
                    'description' => 'The view for auth.',
                    'source' => __DIR__ . '/../views/auth/login.blade.php',
                    'destination' => BASE_PATH . '/resources/views/auth/login.blade.php',
                ],
                [
                    'id' => 'view',
                    'description' => 'The view for auth.',
                    'source' => __DIR__ . '/../views/auth/register.blade.php',
                    'destination' => BASE_PATH . '/resources/views/auth/register.blade.php',
                ],

                [
                    'id' => 'view',
                    'description' => 'The view for auth.',
                    'source' => __DIR__ . '/../views/home.blade.php',
                    'destination' => BASE_PATH . '/resources/views/home.blade.php',
                ],
            ]
        ];
    }
}
