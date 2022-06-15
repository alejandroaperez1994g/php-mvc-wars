<?php

require_once MODELS . "hobbieModel.php";

$action = "";

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Invalid user action");
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

function getAllHobbie()
{
    $hobbies = get();
    if (isset($hobbies)) {
        require_once VIEWS . "/hobbie/hobbie.php";
    } else {
        error("There is a database error, try again.");
    }
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
