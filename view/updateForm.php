<html>
<head>
    <title> Update </title>
</head>
<body>
<form action="../controller/updateCtrl.php" method="post" name="update" autocomplete="on" >
    <h1 style=" font-size: x-large"> Enter Date </h1>
    <p> <input type="text" name="name" value="<?php echo ($item['name']) ?>" /> Name </p>
    <p> <input type="text" name="description" value="<?php echo ($item['description']) ?>" /> Description </p>
    <p> <input type="text" name="created_at" value="<?php echo ($item['created_at']) ?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}" /> Created_at </p>
    <p>
        <input type="submit" value="Save chenges">
        <input type="reset" value="Return to the original state">
        <button name="cancel" formaction="/../index.php" > Cancle </button>
        <input type="text" name="id"  value="<?php echo $item['id'] ?>" hidden>
    </p>
</form>
</body>
</html>