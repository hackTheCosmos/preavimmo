<?php

// Autoloader
spl_autoload_register(function ($class_name) {
    // classes
    $file_name = "Classes/".$class_name.".php";
    
    if (file_exists($file_name)) {
        require_once $file_name;
    }
    
    // controllers
    $file_name = "Controllers/".$class_name.".php";
    if (file_exists($file_name)) {
        require_once $file_name;
    }
});