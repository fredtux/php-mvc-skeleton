<?php

/**
 * Simple MVC autoload - no fancy stuff
 * @param $className
 * @throws Exception
 */
function mvcAutoload($className){
    // MVC keywords
    if($pos = strpos($className, 'Controller')){ // Controller
        $folder = ucfirst('controller');
    } elseif ($pos = strpos($className, 'Model')) { // Model
        $folder = ucfirst('model');
    } elseif ($pos = strpos($className, 'View')){ // View
        $folder = ucfirst('view');
    } else {
        throw new \Exception('Not found');
    }

    // Simplified use of namespace - doesn't matter in the folder structure
    while($pos = strpos($className, '\\') !== false){
        $className = substr($className, $pos);
    }

    require_once __DIR__ . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $className . '.php';
}

/**
 * Register autoloader
 */
spl_autoload_register('mvcAutoload', true);