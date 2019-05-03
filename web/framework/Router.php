<?php
/**
 * 
 */
class Router
{

//	******************************************
//	******************************************
//	******************************************

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

//	******************************************
//	******************************************
//	******************************************

    private function includeModel($controllerClassName)
    {
        $pathModelFile  = ROOT . G::getdirs('models') . '\\' . $controllerClassName . 'Model.php';
        $this->checkPath($pathModelFile);

        require_once $pathModelFile;
    }

	private function includeController($controllerClassName, $actionMethodName, $parameters)
    {
    	$pathControllerFile = ROOT . G::getdirs('controllers') . '\\' . $controllerClassName . '.php';
        $this->checkPath($pathControllerFile);

        require_once $pathControllerFile;
        $controllerObject = new $controllerClassName;
        $controllerObject->$actionMethodName($parameters);
    }

//	******************************************
//	******************************************
//	******************************************

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

                    $actionName = ucfirst(array_shift($segments));
                    $actionMethodName = 'action' . $actionName;

                    $parameters = $segments;

                    $this->includeModel($controllerName);
                    $this->includeController($controllerClassName, $actionMethodName, $parameters);
                    
                    $isThere = true;
                }  
            }

            if (!($isThere))
            {
                include_once("error.php");
            }
    }
//	******************************************
//	******************************************
//	******************************************
}