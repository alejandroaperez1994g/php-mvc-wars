<?php
require_once("helper/dbConnection.php");

function get()
{
    $query = conn()->prepare("SELECT e.id, e.name, e.type
    FROM hobbies e
    ORDER BY e.id ASC;");

    try {
        $query->execute();
        $hobbies = $query->fetchAll();
        return $hobbies;
    } catch (PDOException $e) {
        return [];
    }
}
