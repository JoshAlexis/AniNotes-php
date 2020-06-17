<?php 
    require_once(SITE_ROOT . "/autoload.php");
    use Config\Router;

    Router::get('/','Controller#index');

    Router::get('/pixiv', 'ControllerPixiv#index');
    Router::get('/pixiv/edit/','ControllerPixiv#showEdit');

    Router::get('/illustrator', 'ControllerIllustrator#index');
    Router::get('/illustrator/edit/', 'ControllerIllustrator#showEdit');
    Router::post('/illustrators/edit/[0-9]', 'ControllerIllustrator#edit');

    Router::get('/sauce', 'ControllerSauce#index');
    Router::get('/sauce/edit/','ControllerSauce#showEdit');

?>