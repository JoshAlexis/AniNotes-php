<?php 
    require_once('./autoload.php');
    require_once(SITE_ROOT . "/Config/Routes.php");
    use Config\Router;
    Router::run();
?>