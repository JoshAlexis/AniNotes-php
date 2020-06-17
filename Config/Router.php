<?php  
    namespace Config;
    require_once(SITE_ROOT . "/autoload.php");
    require_once(SITE_ROOT . "/Controllers/ControllerPixiv.php");
    require_once(SITE_ROOT . "/Controllers/ControllerIllustrator.php");
    require_once(SITE_ROOT . "/Controllers/ControllerSauce.php");
    use Controllers\Controller;
    use Controllers\ControllerPivix;
    use Controllers\ControllersIllustrator;
    use Controllers\ControllerSauce;
    
    /**
     * Provides methods to create routes and it's control
     */
    class Router{

        private static $routesList = [];
        private static $lastRouteUsed = [];
        
        public static function run(){
            $path =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $method = $_SERVER['REQUEST_METHOD'];
            
            $matched_route = [];
            foreach(self::$routesList as $route){
                if($route['uri'] == $path && $route['method'] == $method){
                    $matched_route = $route;
                    self::$lastRouteUsed == $route;
                }
            }
            
            self::callController($matched_route);
        }

        public static function get($route,$controller){
            array_push(self::$routesList, [
                'uri' => $route,
                'controller' => $controller,
                'method' => 'GET'
            ]);
        }

        public static function post($route,$controller){
            array_push(self::$routesList, [
                'uri' => $route,
                'controller' => $controller,
                'method' => 'POST'
            ]);
        }

        public static function allRoutes(){
            print_r(self::$routesList);
        }

        private static function getControllerInstance($controller){
            if($controller == 'ControllerPixiv'){
                return new ControllerPivix();
            }else if($controller == 'ControllerIllustrator'){
                return new ControllersIllustrator();
            }else if($controller == 'ControllerSauce'){
                return new ControllerSauce();
            }else if($controller == 'Controller'){
                return new Controller();
            }
        }

        private static function redirect($path = "error"){
            if(!$path == "error"){
                
            }
            require_once(SITE_ROOT . "/Views/404.php");
        }

        private static function callController($matched_route){
            if(!empty($matched_route)){
                $elements = explode('#',$matched_route['controller']);
                $controller = self::getControllerInstance($elements[0]);
                $function = $elements[1];
                call_user_func([$controller, $function]);
            }else{
                self::redirect();
            }
        }
    }
?>