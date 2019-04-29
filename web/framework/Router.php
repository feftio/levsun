<?php
/**
 * 
 */
class Router
{

    public function __construct()
    {
        G::setdirs(include_once ROOT . '\config\dirs.php');
    	G::setroutes(include_once ROOT . '\config\routes.php');
    	G::setrouter(include_once ROOT . '\config\router.php');
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
            //return trim($_SERVER['REQUEST_URI']);
        }
    }


    private function includeModel($controllerClassName)
    {
        $pathModelFile  = ROOT . G::getdir('models') . '\\' . $controllerClassName . 'Model.php';
        $this->checkPath($pathModelFile);

        require_once $pathModelFile;
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

            foreach (G::getroutes() as $uriPattern => $path) 
            {
                if (preg_match('/^' . $uriPattern . '$/', $uri)) 
                {
                    $internalRoute = preg_replace('/^' . $uriPattern . '$/', $path, $uri);       
                    $segments = explode('/', $internalRoute);

                    $controllerName = ucfirst(array_shift($segments));
                    $controllerClassName = $controllerName . 'Controller';
                    $controllerFileName = $controllerClassName . '.php';
                    $controllerFilePath = ROOT . '\controllers\\' . $controllerFileName;

                    $actionName = ucfirst(array_shift($segments));
                    $actionMethodName = 'action' . $actionName;

                    $parameters = $segments;

                    $this->includeModel($actionName);
                    $this->includeController($controllerFilePath, $controllerClassName, $actionMethodName, $parameters);
                    $isThere = true;
                }  
            }

            if (!($isThere))
            {
                include_once("error.php");
            }
    }
}