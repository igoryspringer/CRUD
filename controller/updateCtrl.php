<?php

require_once __DIR__.'/../model/Article.php';
$item = "";

if (isset ($_GET['id']))
{
    $article = new Article();
    $item = $article->ReadById($_GET['id']);
    //$item = (new Article())->ReadById($_GET['id']);
}

if (isset($_POST['update']))
{
    if ($_POST['name'] && $_POST['description'] && $_POST['created_at'])
    {
        $article = new Article();
        $item = $article->UpdateById ($_POST['name'], $_POST['description'], $_POST['created_at'], $_POST['id']);
        header("Location: ../index.php");
    }
    else
        {
            echo "All values must be filled";
            $item = $_POST;
        }
}
//$title = $item['name'];
require_once __DIR__."/../view/updateForm.php";