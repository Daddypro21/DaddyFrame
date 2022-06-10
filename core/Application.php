<?php
namespace app\core;
/**
 * Class Application
 * @author Slime Ndema Massala 'Daddypro21' <sndempro@gmail.com>
 * @package app\core
 * @copyright 2022 Juin
 */
class Application
{
    public static $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    //public static Application $app;
    public function __construct($rootPath)
    {
        //self::$app = $this;
        self::$ROOT_DIR = $rootPath ;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request,$this->response);
        
    }

    public function run()
    {
       echo $this->router->resolve();
    }
}