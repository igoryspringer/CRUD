</html>
<head>
    <title> Create data </title>
</head>

<body>

<form action="../controller/createCtrl.php" method="post" name="create" autocomplete="on" >

    <h1 style=" font-size: x-large"> Enter Data </h1>

    <p>  <input type="text" name="Name"> Name </p>

    <p>  <input type="text" name="Description"> Description </p>

    <p>  <input type="date"  name="Created_at" value="<?php echo date('Y-m-d H:i:s', Time());?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}"/> Created_at </p>

    <p>
        <input type="submit" value="Save" >

        <input type="reset" value="Reset">

        <a href="../index.php"><input type="button"  value="Отменить" name="chancel" > </a>
    </p>

</form>
</body>
</html>