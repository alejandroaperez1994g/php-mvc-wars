<?php
require_once("helper/dbConnection.php");

function get()
{
    $query = conn()->prepare("SELECT e.id, e.name, e.email, g.name as 'gender', e.city, e.age, e.phone_number
    FROM employees e
    INNER JOIN genders g ON e.gender_id = g.id
    ORDER BY e.id ASC;");

    try {
        $query->execute();
        $employees = $query->fetchAll();
        return $employees;
    } catch (PDOException $e) {
        return [];
    }
}

function getEmployeeBD($id)
{
    $query = conn()->prepare("SELECT e.id, e.name, e.last_name,  e.email, g.id as 'gender', e.city, e.age, e.phone_number, e.street_address, e.state, e.postal_code
    FROM employees e
    INNER JOIN genders g ON e.gender_id = g.id
    WHERE e.id={$id};");

    try {
        $query->execute();
        $employee = $query->fetchAll();
        return $employee;
    } catch (PDOException $e) {
        return [];
    }
}
