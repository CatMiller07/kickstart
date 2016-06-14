<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/9/2016
 * Time: 9:30 PM
 */

$db = new PDO("mysql:host=localhost;dbname=kickstartapp", "admin", "admin");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $queryStr = "INSERT INTO users (name, password, email) VALUES ('admin', MD5('admin'), 'youremail@domain.com')";
    $db->query($queryStr);
} catch (PDOException $e) {
    echo $e->getMessage();
}