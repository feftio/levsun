<?php
/**
 * 
 */
class Router
{

    private $routes;
    private $path;

    public function __construct()
    {
    	$this->path   = include_once ROOT . '\config\path.php';
        $this->routes = include_once ROOT . '\config\routes.php';
    }

    private function checkPath()
    {
    	$errors = array();
    	foreach (func_get_args() as $path)
    	{
    		if (!file_exists($path))
    		{
    			$errors[] = 'Not found: ' . $path;
    		}
    	}

    	if ($errors)
    	{
    		foreach ($errors as $error)
    		{
    			echo $error . '<br>';
    		}
    		exit;
    	}
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    private function array_merge_recursive_simple() {

    if (func_num_args() < 2) 
    {
        trigger_error(__METHOD__ .' needs two or more array arguments', E_USER_WARNING);
        return;
    }
    $arrays = func_get_args();
    $merged = array();
    while ($arrays) {
        $array = array_shift($arrays);
        if (!is_array($array)) {
            trigger_error(__METHOD__ .' encountered a non array argument', E_USER_WARNING);
            return;
        }
        if (!$array)
            continue;
        foreach ($array as $key => $value)
            if (is_string($key))
                if (is_array($value) && array_key_exists($key, $merged) && is_array($merged[$key]))
                    $merged[$key] = call_user_func(__METHOD__, $merged[$key], $value);
                else
                    $merged[$key] = $value;
            else
                $merged[] = $value;
    }
    return $merged;
	}

    private function includeModel($controllerName)
    {
    	$controllerName = ucfirst($controllerName);

    	$pathModels = ROOT . $this->path['models'] . '/';
        $pathModelFile = $pathModels . $controllerName . '.php';
        $this->checkPath($pathModelFile);
        require_once $pathModelFile;
    }

    private function includeGlobal($controllerName)
    {
        $pathGlobal = ROOT . $this->path['global'] . '/';
        $pathGlobalFile = $pathGlobal . 'global__' . $controllerName . '.php';
        $pathGlobalDefaultFile = ROOT . $this->path['global__default.php'];
        $this->checkPath($pathGlobalFile, $pathGlobalDefaultFile);

        global $Global;
        $DefaultGlobal = require_once $pathGlobalDefaultFile;
        $WebGlobal = require_once $pathGlobalFile;
        //$Global = array_merge($WebGlobal, $DefaultGlobal);
        $Global = array_merge_recursive($DefaultGlobal, $WebGlobal);
        print_r($Global);
        exit;
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
                    $this->includeGlobal($controllerName);
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
        	$this->includeGlobal('main');
            $this->includeController(ROOT . '\controllers\MainController.php', 'MainController', 'actionIndex', '');
        }
    }
}