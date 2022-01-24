<?php


namespace Stru\StruHyperfUi\Controller;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Container\ContainerInterface;
use function Hyperf\ViewEngine\view;

/**
 * Class StruAuthController
 * @package Stru\StruHyperfOauth\Controller\Auth
 * @Controller()
 */
class HomeController
{
    /**
     * @Inject
     * @var ContainerInterface
     */
    protected $container;
    /**
     * @Inject
     * @var RequestInterface
     */
    protected $request;
    /**
     * @Inject
     * @var ResponseInterface
     */
    protected $response;

    /**
     * @return mixed
     * @RequestMapping(path="home",methods="GET")
     */
    public function index()
    {
        return view('home');
    }
}