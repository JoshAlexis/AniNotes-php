<?php 

    namespace Controllers;
    require_once(SITE_ROOT . "/autoload.php");
    use Controllers\Controller;

    class ControllerSauce extends Controller{
        public static function index(){
            require_once(SITE_ROOT . "/Views/sauce.php");
        }
    }
?>