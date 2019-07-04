<?php

require_once __DIR__.'/../model/Article.php';
date_default_timezone_set ("Europe/Kiev");
if (isset($_POST['create']))
{
    if ($_POST['name'] && $_POST['description'] && $_POST['created_at'])
    {
        (new article)->CreateArticle ($_POST['name'], $_POST['description'], $_POST['created_at']);
        header('Location: ../index.php');
    }
    else {echo "All values must be filled";}
}
require_once __DIR__.'/../view/createForm.php';
