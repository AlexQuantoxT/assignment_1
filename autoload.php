<?php
spl_autoload_register(function ($class_name) {
    require_once str_replace("\\",DIRECTORY_SEPARATOR, ($class_name)) . '.php';
});