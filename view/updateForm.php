<head>
    <title> Изменение </title>
</head>
<body>
<form action="../controller/updateCtrl.php" method="post" name="update" autocomplete="on" >
    <h1 style=" font-size: x-large"> Введите данные </h1>
    <p> <input type="text" NAME="name" value="<?php echo ($item['name']) ?>" /> Имя </p>
    <p> <input type="text" NAME="description" value="<?php echo ($item['description']) ?>" /> Описание </p>
    <p> <input type="text" NAME="created_at" value="<?php echo ($item['created_at']) ?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}" /> Дата создания </p>
    <p>
        <input type="submit" value="Сохранить изменения"  >
        <input type="reset" value="Вернуть в исходное состояние" >
        <button name="cancel" formaction="../index.php" > Отменить </button>
        <input type="text" name="id"  value="<?php echo $item['id'] ?>" hidden>

    </p>
</form>
</body>