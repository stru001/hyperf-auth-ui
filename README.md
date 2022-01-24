# stru-hyperf-auth

#### Description
```
使用blade模板实现发布注册，登录视图
```

#### Installation
```
composer require stru/stru-hyperf-auth
```

#### Publish
```
php bin/hyperf.php vendor:publish stru/stru-hyperf-auth
```


#### Config
```
// config/authload/middlewares.php 添加session
\Hyperf\Session\Middleware\SessionMiddleware::class,

// config/authload/exceptions.php 添加异常处理
\Stru\StruHyperfAuth\AuthExceptionHandler::class,

// App\Model\User.php
1. 实现接口 Authenticatable
2. 添加代码
public function getAuthIdentifierName(): string
{
    return $this->getKeyName();
}

public function getAuthIdentifier()
{
    return $this->getKey();
}

public function getAuthPassword(): string
{
    return $this->password;
}
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


