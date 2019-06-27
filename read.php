    <?php
$pdo = new PDO ("pgsql:host=127.0.0.1; dbname=CRUD", "postgres", "gfnhbjn");
//$sql = "SELECT * FROM arcticl";
$pdo_statement = $pdo->prepare("SELECT * FROM Article");
$pdo_statement->execute();
$result = $pdo_statement->fetchALL();
?>

<head>
    <title> Таблица </title>
</head>
<body>

<form  action="" name="Modife" method="post">

    <Table border="1" >
    <!-- Заголовок таблицы -->
        <caption style=" front-size:xx=large"> Arcticle </caption>

        <!-- Шапка таблицы -->
        <tr style="font-weight: bold" >
            <td>Имя</td><td>Описание</td><td>Дата создания</td> <td></td>
        </tr>
        <!-- Наполнение таблицы данными -->
        <?php
        foreach($result as $item) { ?>

            <tr>
                <td> <?php echo $item['name']; ?> </td>
                <td> <?php echo $item['desciption']; ?> </td>
                <td> <?php echo $item['created_at']; ?> </td>

            <td>
                <a href="Update.php?id<?php echo $item['id'];?>"> Изменить</a>
                <a href="Delete.php?id<?php echo $item['id'];?>"> Удалить</a>
            </td>
            </tr>

     <?php } ?>
    </Table>

    <br>
    <button name="create" formacrion="create.php" formethod="post"> </button>
</form>
</body>
</html>