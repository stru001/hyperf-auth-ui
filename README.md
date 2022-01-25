# stru-hyperf-ui

#### Description
```
使用blade模板实现发布注册，登录视图
```

#### Installation
```
composer require stru/stru-hyperf-ui
```

#### Publish
```
php bin/hyperf.php vendor:publish hyperf/view
php bin/hyperf.php vendor:publish stru/stru-hyperf-ui
```


#### Config
```
// config/autoload/view.php
return [
    'engine' => BladeEngine::class,
    'mode' => Mode::TASK,
    'config' => [
        'view_path' => BASE_PATH . '/resources/views/',
        'cache_path' => BASE_PATH . '/runtime/view/',
    ],
];
// ocnfig/autoload/server.php
return [
    'settings' => [
        ...
        // 静态资源
        'document_root' => BASE_PATH . '/public',
        'enable_static_handler' => true,
        // Task
        'task_worker_num' => 2,
        'task_enable_coroutine' => false
    ],
    'callbacks' => [
        ...
        // Task callbacks
        Event::ON_TASK => [Hyperf\Framework\Bootstrap\TaskCallback::class, 'onTask'],
        Event::ON_FINISH => [Hyperf\Framework\Bootstrap\FinishCallback::class, 'onFinish'],
    ]
];
```

#### Use
```
public function showLogin()
{
    return view('auth.login');
}
public function showRegister()
{
    return view('auth.register');
}
```


