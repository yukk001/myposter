<?php


if (version_compare(PHP_VERSION, '5.6.0', '<')) die('require PHP > 5.6.0 !');

define('APP_ROOT', dirname(__DIR__));
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, -10));
date_default_timezone_set('Asia/Shanghai');
require APP_ROOT . '/../vendor/autoload.php';


$router = new AltoRouter();
require APP_ROOT . '/config/router.php';
//添加默认路由规则
$router->map('GET|POST', '/[a:controllerName]/[a:actionName]', function ($controllerName, $actionName) {
    runAction($controllerName, $actionName, []);
});

$router->map('GET|POST', '/[a:controllerName]/[a:actionName]/?[**:]', function ($controllerName, $actionName) {
    $args = explode('/', $_SERVER['REQUEST_URI']);
    $args = array_slice($args, 3);
    runAction($controllerName, $actionName, $args);
});
$router->map('GET|POST', '', function ($controllerName, $actionName) {
    runAction($controllerName, $actionName, []);
});


$match = $router->match();

// no route was matched
if (false === $match) {
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    exit('URI :' . $_SERVER['REQUEST_URI'] . ' Has No Route Matched!');
}

// call closure or throw 404 status
if (is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    if (false === strpos($match['target'], '@')) {
        exit('Invalid Target :' . $match['target'] . '!');
    }
    list($controllerName, $actionName) = explode('@', $match['target']);
    runAction($controllerName, $actionName, $match['params']);
}

//if( $match && is_callable( $match['target'] ) ) {
//	call_user_func_array( $match['target'], $match['params'] );
//}
//else {
//	list($controllerName,$actionName) = explode('#',$match['target']);
//	$controllerClass =  '\app\controllers\\'.$controllerName ;
//	try{
//		$controller = new $controllerClass();
//    }catch (Exception $e){
//		var_dump($e);
//	}
//
//	if(method_exists($controllerClass,$actionName)){
//		$controller->$actionName();
//	}
//	else
//	{
//		echo 'method not found';
//	}
//	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
//}

function runAction($controllerName='index', $actionName='index', $args,$type ='Controller')
{
    // echo $controllerName;
    $controllerClass = '\app\\'.strtolower($type).'s\\' . ucfirst($controllerName) .ucfirst($type);
//var_dump($controllerClass);
    if (!class_exists($controllerClass)) {
        exit($controllerName . ' Class Not Found!');
    }
    $controller = new $controllerClass();
    if (method_exists($controller, $actionName)) {
        $controller->$actionName(...$args);
    } else {
        exit($actionName . ' Action Not Found!');
    }

}

?>
