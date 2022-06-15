<?php

require_once MODELS . "employeeModel.php";

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

function getAllEmployees()
{
    $employees = get();
    if (isset($employees)) {
        require_once VIEWS . "/employee/employeeDashboard.php";
    } else {
        error("There is a database error, try again.");
    }
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}

function getEmployee($request)
{
    $employee = null;

    if (isset($request['id'])) {
        $id = $request['id'];
        $employee = getEmployeeBD($id);
    }
    require_once VIEWS . "/employee/employee.php";
}


function deleteEmployee($request)
{
    $response = null;

    if (isset($request['id'])) {
        $id = $request['id'];
        $response = deleteUserById($id);
        if ($response[0]) {
            header("Location: index.php?controller=employee&action=getAllEmployees");
        } else {
            error("There is a database error, try again.");
        }
    }
}

function openForm()
{
    require_once VIEWS . "/employee/employee.php";
}

function createEmployee()
{

    $response = createUser($_POST);

    if ($response[0]) {
        header("Location: index.php?controller=employee&action=getAllEmployees");
    } else {
        error("There is a database error, try again.");
    }
}

function updateEmployee()
{

    $response = updateUser($_POST);

    if ($response[0]) {
        header("Location: index.php?controller=employee&action=getAllEmployees");
    } else {
        error("There is a database error, try again.");
    }
}
