    <?php
$pdo = new PDO ("pgsql:host=localhost; dbname=postgres", "postgres", "gfnhbjn");

$pdo_statement = $pdo->prepare("SELECT * FROM article");
$pdo_statement->execute();
$result = $pdo_statement->fetchALL();
$pdo_statement->fetchALL();

?>

<head>
    <title> Таблица </title>
</head>
<body>

<form  action="" name="Modife" method="post">

    <Table border="1" >
    <!-- Заголовок таблицы -->
        <caption style=" front-size:xx=large"> arcticle </caption>

        <!-- Шапка таблицы -->
        <tr style="font-weight: bold" >
            <td>Имя</td><td>Описание</td><td>Дата создания</td> <td></td>
        </tr>
        <!-- Наполнение таблицы данными -->
        <?php
        foreach($result as $item) { ?>

            <tr>
                <td> <?php echo $item['name']; ?> </td>
                <td> <?php echo $item['description']; ?> </td>
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