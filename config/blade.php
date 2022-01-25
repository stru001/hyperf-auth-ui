<?php

declare(strict_types=1);

return [
    'route' => [
        'show_login' => '/auth/login',  //显示登录表单
        'login' => '/auth/login', // 提交登录表单
        'show_register' => '/auth/register', //显示注册表单
        'register' => '/auth/register', //提交注册表单
        'logout' => '/auth/logout', // 退出登录
        'home' => '/home', // 显示示例主页
    ],
];
