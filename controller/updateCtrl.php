<?php

require_once __DIR__.'/../model/Article.php';
$item = "";

if (isset ($_GET['id'])) {
    $item = (new Article())->ReadById($_GET['id']);
    //$article = new Article();
    //$update = $article->readById($_GET['id']);
}
if (isset($_POST['id'])) {
    if ($_POST['name'] && $_POST['description'] && $_POST['created_at']) {
        $article = new Article();
        $update = $article->UpdateById($_POST['name'], $_POST['description'], $_POST['created_at'], $_POST['id']);
        header ( "Location: ../index.php");
    }

    else {echo "все значения должны быть заполнены";}
}

require_once __DIR__."/../view/updateForm.php";