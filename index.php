<?php 
ini_set('display_errors', '1');
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
require_once ROOT . '/vendor/autoload.php';
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals();
$params = $request->getServerParams();
print_r($params);
//print_r(normalizeServer('apache_request_headers'));



