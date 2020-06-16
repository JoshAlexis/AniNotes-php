<?php 

    namespace Controllers;
    require_once(SITE_ROOT . "/autoload.php");
    use Controllers\Controller;

    class ControllersIllustrator extends Controller{
        public static function index(){
            require_once(SITE_ROOT . "/Views/illustrators.php");
        }
    }
?>