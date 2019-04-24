<?php
/**
 * 
 */
class Router
{

    private $routes;
    private $pathGlobal;
    private $pathModels;
    private $pathRoutes;
    private $pathDefaultGlobalFile;

    public function __construct()
    {
        $this->pathGlobal = ROOT . '\config\global\global_';
        $this->pathRoutes = ROOT . '\config\routes.php';
        $this->pathModels = ROOT . '\models\\';
        $this->pathDefaultGlobalFile = ROOT . '\config\global\default\global_default.php';
        $this->routes = include($this->pathRoutes);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) 
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    private function includeController($controllerFile, $controllerName, $actionName, $parameters)
    {
        if (file_exists($controllerFile)) 
        {
            require_once $controllerFile;
            $controllerObject = new $controllerName;
            $controllerObject->$actionName($parameters);
        }
        else 
        {
        	echo "There isn't file on this path: " . $controllerFile;
        }
    }

    private function includeConfig($controllerName)
    { 
        $pathGlobalFile = $this->pathGlobal . $controllerName . '.php';
        if (file_exists($pathGlobalFile))
        {
            global $Global;
            $DefaultGlobal = require_once $this->pathDefaultGlobalFile;
            $WebGlobal = require_once $pathGlobalFile;
            $Global = array_merge($DefaultGlobal, $WebGlobal);
        }
    }

    private function includeModel($controllerName)
    {
        $controllerName = ucfirst($controllerName);
        $pathModelFile = $this->pathModels . $controllerName . '.php';
        if (file_exists($pathModelFile))
        {
            require_once $pathModelFile;
        }
        else
        {
        	echo "There isn't file of Model on this path: " . $pathModelFile;
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

                    $controllerName = $segments[0];
                    $controllerFullName = ucfirst(array_shift($segments)) . 'Controller';
                    $actionName = $segments[0];
                    $actionFullName = 'action' . ucfirst(array_shift($segments));
                    $controllerFile = ROOT . '\controllers\\' . $controllerFullName . '.php';
                    $parameters = $segments;

                    $this->includeModel($controllerName);
                    $this->includeConfig($controllerName);
                    $this->includeController($controllerFile, $controllerFullName, $actionFullName, $parameters);
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
        	$this->includeModel('main');
            $this->includeConfig('main');
            $this->includeController(ROOT . '\controllers\MainController.php', 'MainController', 'actionIndex', '');
        }
    }
}