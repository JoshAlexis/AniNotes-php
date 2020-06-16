<?php 
    
    require_once('./Config/Routes.php');
    use Config\Routing\Router;
    // Route::redirect($_SERVER['REQUEST_URI']);
    // Route::run();
    Router::allRoutes();
?>