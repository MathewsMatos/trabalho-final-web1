<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', true);

spl_autoload_register(function($class) {
    if (file_exists("$class.php")) {
        require_once "$class.php";
        return true;
    }
});

if ($_GET) {
    $controller = isset($_GET['controller']) ? ((class_exists($_GET['controller'])) ? new $_GET['controller'] : NULL ) : null;
    $method     = isset($_GET['method']) ? $_GET['method'] : null;
    if ($controller && $method) {
        if (method_exists($controller, $method)) {
            $parameters = $_GET;
            unset($parameters['controller']);
            unset($parameters['method']);
            call_user_func(array($controller, $method), $parameters);
        } else {
            echo "Método não encontrado!";
        }
    } else {
        echo "Controller não encontrado!";
    }
} else {
    header("location: public/src/pages/home/index.php");
}
?>


?>
