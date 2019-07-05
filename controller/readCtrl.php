<?php

require_once __DIR__.'/../model/Article.php';
//$Result = (new Article());
//$Result->ReadArticle();
$article = new Article();
$Result = $article->ReadArticle();
require_once __DIR__.'/../view/readForm.php';
