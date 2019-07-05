<?php

require_once __DIR__.'/../model/Article.php';
date_default_timezone_set ("Europe/Kiev");

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {
    if ($_POST['name'] && $_POST['description'] && $_POST['created_at']) {
        //$article = new Article();
        //$create = $article->...
        (new Article())->CreateArticle($_POST['name'], $_POST['description'], $_POST['created_at']);
        header ( "Location: ../index.php");
    }
    else {echo "все поля должны быть заполнены";}
}
require_once __DIR__.'/../view/createForm.php';
