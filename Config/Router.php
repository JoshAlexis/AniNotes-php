<?php  
    // include_once('../Controllers');
    namespace Config\Routing;
    use Controllers;

    class Router{

        private static $routesList = [];
        
        public static function add($route, $function){
            array_push(self::$routesList,[
                'uri' => $route,
                'controller' => $function
            ]);
            
        }

        public static function redirect($route){
            foreach(self::$routesList as $rou){
                if($rou == $route){
                    
                }
            }
        }

        public static function run(){
            $path =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $method = $_SERVER['REQUEST_METHOD'];

            foreach(self::$routesList as $route){
                if($route['uri'] == $path && $route['method'] == $method){
                    $elements = explode('#',$route['controller']);
                    $controller = $elements[0];
                    $function = $elements[1];
                    call_user_func([$controller, $function]);
                }
            }
        }

        public static function get($route,$controller){
            array_push(self::$routesList, [
                'uri' => $route,
                'function' => $controller,
                'controller' => 'GET'
            ]);
        }

        public static function post($route,$controller){
            array_push(self::$routesList, [
                'uri' => $route,
                'function' => $controller,
                'controller' => 'POST'
            ]);
        }

        public static function allRoutes(){
            print_r(self::$routesList);
        }
    }
?>