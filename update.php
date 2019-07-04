<?php

if (isset ($_GET['id'])) {
    $Connect2DB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", "gfnhbjn", array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $ReadFromDB = $Connect2DB->prepare("SELECT * FROM article WHERE id=:IDENTITY ");
    $ReadFromDB->bindParam(":IDENTITY", $_GET['id']);
    $ReadFromDB->execute();
    $Result = $ReadFromDB->fetchAll();

    foreach ($Result as $item);
    $title = $item['name'];
}

if (isset($_POST['id'])) {
    if ($_POST['name'] && $_POST['description'] && $_POST['created_at']) {
        $Connect2DB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", "gfnhbjn", array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $Update2DB = $Connect2DB -> prepare("UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id");
        $Update2DB -> bindParam(':name', $_POST['name']);
        $Update2DB -> bindParam(':description', $_POST['description']);
        $Update2DB -> bindParam(':created_at', $_POST['created_at']);
        $Update2DB -> bindParam(':id', $_POST['id']);
        $Result = $Update2DB -> execute();
    }
    header ("location: read.php");
    exit ( );
}
?>

<head>
    <title> Изменение </title>
</head>
<body>
<form action="update.php" method="post" name="update" autocomplete="on" >
    <h1 style=" font-size: x-large"> Введите данные </h1>
    <p> <input type="text" NAME="name" value="<?php echo ($item['name']) ?>" /> Имя </p>
    <p> <input type="text" NAME="description" value="<?php echo ($item['description']) ?>" /> Описание </p>
    <p> <input type="text" NAME="created_at" value="<?php echo ($item['created_at']) ?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}" /> Дата создания </p>
    <p>
        <input type="submit" value="Сохранить изменения"  >
        <input type="reset" value="Вернуть в исходное состояние" >
        <button name="cancel" formaction="read.php" > Отменить </button>
        <input type="text" name="id"  value="<?php echo $item['id'] ?>" hidden>

    </p>
</form>
</body>
