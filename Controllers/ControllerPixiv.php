<?php 
    namespace Controllers;
    // require_once(SITE_ROOT . "/autoload.php");
    require_once('Controller.php');
    
    use Controllers\Controller;

    class ControllerPivix extends Controller{
        public static function index(){
            require_once(SITE_ROOT . "/Views/pixiv.php");
        }
    }

?>