<?php 
    /* require_once(SITE_ROOT . "/Config/Router.php");
    require_once(SITE_ROOT . "/Config/Routes.php"); */
    require_once('./autoload.php');
    require_once(SITE_ROOT . "/Config/Routes.php");
    use Config\Router;
    Router::run();
?>