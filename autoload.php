<?php 
    define('SITE_ROOT',dirname(__FILE__));
    define('DS',DIRECTORY_SEPARATOR);
    spl_autoload_register(function($className){
        $file = SITE_ROOT . DS . str_replace("\\",DS, $className) . ".php";
        if(file_exists($file)){
            require_once($file);
        }
    })

?>