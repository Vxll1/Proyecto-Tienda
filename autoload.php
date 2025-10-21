<?php 
    function controller_autoload($classname) {
        include 'Controllers/' . $classname . '.php';
    }

    spl_autoload_register('controller_autoload');
?>