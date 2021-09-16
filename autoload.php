<?php
spl_autoload_register(function ($class_name) {
    // echo str_replace("\\","/", ("classes/" . $class_name)) . '.php';
    require_once str_replace("\\","/", ($class_name)) . '.php';
});