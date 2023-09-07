<?php


    $db = new mysqli("localhost", "db_practica5", "root", "");
    if (!$db) {
        return $db;
    } else {
        return false;
    }

/*
try {
    $db = new mysqli("localhost", "db_practica5", "root", "");
    if ($db) {
        return $db;
    } else {
        return false;
    }
} catch (Exception $e) {
    echo "Error:" . $e->getMessage();
}

*/