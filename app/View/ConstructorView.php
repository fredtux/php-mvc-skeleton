<?php

namespace myproject\View;

class ConstructorView {
    /**
     * Dynamically show pages based on GET parameter "page"
     * Hardcoded: home
     */
    public static function getPage(){
        if(empty($_GET['page'])){
            $page = 'home';
        } else {
            $page = $_GET['page'];
        }

        try {
            header('Cache-Control: max-age=60');
            header('Cache-Control: public');

            // Get controller
            $controllerName = '\\myproject\\Controller\\' . ucfirst($page) . 'Controller';
            $controller = new $controllerName;

            // Call methos
            $methodName = 'show' . ucfirst($page) . 'Page';
            $controller->$methodName();
        } catch (\Exception $e) {
            die('Invalid page');
        }
    }

    /**
     * Dynamically load ajax based on GET parameters "controller" and "action"
     */
    public static function ajax(){
        if(empty($_GET['controller'])) die('No controller');
        if(empty($_GET['action'])) die('No action');

        // Get controller
        $controllerName = '\\myproject\\Controller\\Ajax' . ucfirst($_GET['controller']) . 'Controller';
        $controller = new $controllerName;

        // Call method
        $methodName = $_GET['action'];
        $controller->$methodName();
    }

}