<?php 
    // require_once('Router.php');
    require_once(SITE_ROOT . "/autoload.php");
    use Config\Router;

    Router::get('/','Controller#index');

    Router::get('/pixiv', 'ControllerPixiv#index');
    
    Router::get('/illustrator', 'ControllerIllustrator#index');

    Router::get('/sauce', 'ControllerSauce#index');

?>