<?php
if (isset($_GET['id'])) {
    $Connect2DB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", "gfnhbjn", array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $DeleteFromDB = $Connect2DB -> prepare("DELETE FROM article WHERE id=:id;");
    $DeleteFromDB -> bindParam(':id', $_GET['id']);
    $Result = $DeleteFromDB -> execute();
    header ("Location: read.php");
    exit();
}
?>