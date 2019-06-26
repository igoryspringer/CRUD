<?php

$pdo = new PDO ("pgsql:host=127.0.0.1; dbname=CRUD", "postgres", "gfnhbjn");
$sql = "SELECT * FROM arcticl";

$pdo_statement = $pdo->prepare($sql);
$pdo_statement->execute();
$result = $pdo_statement->fetchALL();
foreach ($result as $element) {
echo $elemetn["name"].$element["created_at"]."<br>";
}