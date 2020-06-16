<?php 
namespace Controllers;

class Controller{
    public static function showView($viewName){
        require_once('../Views/{$viewName}.php');
    }
}

?>