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
        return [false, $e];
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
        return [false, $e];
    }
}

function deleteUserById($id)
{
    $query = conn()->prepare("DELETE FROM employees  WHERE id={$id};");

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

function createUser($post)
{
    $query = conn()->prepare("INSERT INTO employees( name, last_name, email, gender_id, age, phone_number, city, street_address, state, postal_code) 
    VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ?  );");

    $query->bindParam(1, $post["name"]);
    $query->bindParam(2, $post["last_name"]);
    $query->bindParam(3, $post["email"]);
    $query->bindParam(4, $post["gender_id"]);
    $query->bindParam(5, $post["age"]);
    $query->bindParam(6, $post["phone_number"]);
    $query->bindParam(7, $post["city"]);
    $query->bindParam(8, $post["street_address"]);
    $query->bindParam(9, $post["state"]);
    $query->bindParam(10, $post["postal_code"]);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

function updateUser($post)
{
    $query = conn()->prepare("UPDATE employees SET name=?, last_name=?, email=?, gender_id=?, age=?, phone_number=?,
    city=?, street_address=?,state=?, postal_code=? WHERE id=?");

    $query->bindParam(1, $post["name"]);
    $query->bindParam(2, $post["last_name"]);
    $query->bindParam(3, $post["email"]);
    $query->bindParam(4, $post["gender_id"]);
    $query->bindParam(5, $post["age"]);
    $query->bindParam(6, $post["phone_number"]);
    $query->bindParam(7, $post["city"]);
    $query->bindParam(8, $post["street_address"]);
    $query->bindParam(9, $post["state"]);
    $query->bindParam(10, $post["postal_code"]);
    $query->bindParam(11, $post["id"]);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}
