<html>
<head>
    <title> Table </title>
</head>
<body>

<form  action="" name="Modife" method="post">

    <Table border="1" >

        <caption style=" front-size:xx=large"> Article </caption>

        <tr style="font-weight: bold" >
            <td>Name</td><td>Description</td><td>Created_at</td> <td></td>
        </tr>

        <?php
        foreach($Result as $item) { ?>

            <tr>
                <td> <?php echo $item['name']; ?> </td>
                <td> <?php echo $item['description']; ?> </td>
                <td> <?php echo $item['created_at']; ?> </td>

                <td>
                    <a href="/../controller/updateCtrl.php?id=<?php echo $item['id'];?>"> Update </a>
                    <a href="/../controller/deleteCtrl.php?id=<?php echo $item['id'];?>"> Delete </a>
                </td>
            </tr>

        <?php } ?>
    </Table>

    <br>
    <button name="create" formaction="/../controller/createCtrl.php" formmethod="post"> </button>
</form>
</body>
</html>