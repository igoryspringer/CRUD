<?php

require_once __DIR__.'/../model/Article.php';
$article = new Article();
$Result = $article->ReadArticle();
require_once __DIR__.'/../view/readForm.php';
