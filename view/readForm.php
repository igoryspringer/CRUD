<head>
    <title> Таблица </title>
</head>
<body>

<form  action="" name="Modife" method="post">

    <Table border="1" >

        <caption style=" front-size:xx=large"> ARTICLE </caption>


        <tr style="font-weight: bold" >
            <td>Имя</td><td>Описание</td><td>Дата создания</td> <td></td>
        </tr>

        <?php
        foreach($Result as $item) { ?>

            <tr>
                <td> <?php echo $item['name']; ?> </td>
                <td> <?php echo $item['description']; ?> </td>
                <td> <?php echo $item['created_at']; ?> </td>

                <td>
                    <a href="/../controller/updateCtrl.php?id=<?php echo $item['id'];?>"> Изменить</a>
                    <a href="/../controller/deleteCtrl.php?id=<?php echo $item['id'];?>"> Удалить</a>
                </td>
            </tr>

        <?php } ?>
    </Table>

    <br>
    <button name="create" formaction="/../controller/createCtrl.php" formmethod="post"> </button>
</form>
</body>