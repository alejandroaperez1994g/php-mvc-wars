<?php

include_once "config/constants.php";
include_once "config/db.php";

if (isset($_GET['controller'])) {
    $controller = CONTROLLERS . $_GET['controller'] . "Controller.php";
    $fileExists = file_exists($controller);
    if ($fileExists) {
        require_once $controller;
    } else {
        echo $controller;
        $errorMsg = "The page you are trying to access does not exist. from index";
        require_once VIEWS . "error/error.php";
    }
} else {
    require_once VIEWS . "main/main.php";
}
