<?php
/**
 * 
 */
class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '\config\routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) 
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    private function including($controllerFile, $controllerName, $actionName, $parameters)
    {
        if (file_exists($controllerFile)) 
        {
            include_once($controllerFile);
            $controllerObject = new $controllerName;
            $controllerObject->$actionName($parameters);
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        $isThere = false;

        if (!($uri === ''))
        {
            foreach ($this->routes as $uriPattern => $path) 
            {
                if (preg_match("~$uriPattern~", $uri)) 
                {
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);       
                    $segments = explode('/', $internalRoute);
                    $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                    $actionName = 'action' . ucfirst(array_shift($segments));
                    $controllerFile = ROOT . '\controllers\\' . $controllerName . '.php';
                    $parameters = $segments;
    
                    $this->including($controllerFile, $controllerName, $actionName, $parameters);
                    $isThere = true;  
                }  
            }

            if (!($isThere))
            {
                include_once("error.php");
            }
        }
        else
        {
            $this->including(ROOT . '\controllers\MainController.php', 'MainController', 'actionIndex', '');
        }
    }
}