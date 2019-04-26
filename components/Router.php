<?php
/**
 * 
 */
class Router
{

    public function __construct()
    {
    	G::$PathDir  = include_once ROOT . '\config\pathDir.php';
        G::$PathFile = include_once ROOT . '\config\pathFile.php';
        G::$Routes   = include_once ROOT . '\config\routes.php';
        G::$Prefix   = include_once ROOT . '\config\prefix.php';
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








    private function includeModel($controllerName)
    {
    	$controllerName = ucfirst($controllerName);
        $pathModelFile  = G::getFull_PathDir('models') . $controllerName . '.php';
        $this->checkPath($pathModelFile);

        require_once $pathModelFile;
    }

    private function includeGlobal($controllerName)
    {
        $pathGlobalFile        = G::getFull_PathDir('global') . 'global__' . $controllerName . '.php';
        $pathGlobalDefaultFile = G::getFull_PathFile('global__default.php');
        $this->checkPath($pathGlobalFile, $pathGlobalDefaultFile);

        G::setGlobalD(require_once $pathGlobalDefaultFile);
        G::setGlobalF(require_once $pathGlobalFile);
        G::setGlobalM(array_merge_recursive(G::$GlobalD, G::$GlobalF));
    }

	private function includeController($controllerFile, $controllerName, $actionName, $parameters)
    {
        $this->checkPath($controllerFile);
        require_once $controllerFile;
        $controllerObject = new $controllerName;
        $controllerObject->$actionName($parameters);
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