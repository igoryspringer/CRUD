<?php

require_once __DIR__.'/../model/Article.php';
if (isset($_GET['id']))
    {
        $del = (new Article());
        $del->DeleteFromArticle($_GET['id']);
        //$article = new Article();
        //$del = $article->DeleteFromArticle($_GET['id']);
        header ( "Location: ../index.php");
    }
