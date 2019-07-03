<html>
<head>
    <title> Update </title>
</head>
<body>
<form action="../update.php" method="post" name="update" autocomplete="on" >
    <h1 style=" font-size: x-large"> Enter data </h1>
    <p> <input type="text" NAME="name" value="<?php echo ($item['name']) ?>" /> Name </p>
    <p> <input type="text" NAME="description" value="<?php echo ($item['description']) ?>" /> Description </p>
    <p> <input type="text" NAME="created_at" value="<?php echo ($item['created_at']) ?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}" /> Created_at </p>
    <p>
        <input type="submit" value="Save"  >
        <input type="reset" value="Reset" >
        <button name="cancel" formaction="read.php" > Cancle </button>
        <input type="text" name="id"  value="<?php echo $item['id'] ?>" hidden>

    </p>
</form>
</body>
</html>