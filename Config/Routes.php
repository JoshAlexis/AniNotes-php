<?php 
    require_once('Router.php');
    use Config\Routing\Router;

    Router::get('/pixiv', function(){
        echo 'Pixiv';
    });
    
    Router::get('/illustrator', function(){
        echo 'Pixiv';
    });

    Router::get('/sauce', function(){
        echo 'sauce';
    });

?>