<?php
if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["created_at"])) {
$pdo = new PDO ("pgsql:host=127.0.0.1; dbname=CRUD", "postgres", " ");
$sql = "INSERT INTO article (name, discription, created_at) VALUES ( :name, :description, :created_at)";

$pdo_statement = $pdo->prepare($sql);
$pdo_statement->bindValue(":name", $_POST["name"]);
$pdo_statement->bindValue(":description", $_POST["description"]);
$pdo_statement->bindValue(":created_at", $_POST["created_at"]);
$pdo_statement->execute();
        }
$datetime = date("Y-m-d H:i:s", time());
?>
<form action="create.php" method="post">
<input type="text" name="name" required>
<input type="text" name="description" required>
<input type="text" name="created_at" required value="<?php echo $datetime ?>">
<input type="submit">
</form>