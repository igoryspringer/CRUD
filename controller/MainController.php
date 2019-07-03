<?php

include (__DIR__.'/../model/Article.php');

class MainController
{

    public function create()
    {
        if (!isset($_POST['Name'], $_POST['Description'], $_POST['Created_at'])
        || !($_POST['Name'] && $_POST['Description'] && $_POST['Created_at'])) {
                ob_start();
                include(__DIR__ . '/../view/createForm.php');
                $result = ob_get_clean();
                return $result;
            }
        $model = new Article();
        $model->CreateArticle($_POST['Name'], $_POST['Description'], $_POST['Created_at']);
        header('Location:read.php');
    }

    public function read()
    {
        $model = new Article();
        $articles = $model->ReadArticle();
        ob_start();
        include (__DIR__.'/../view/readForm.php');
        $result = ob_get_clean();
        return $result;
    }

    public function update()
    {
        $model = new Article();
        if (isset($_GET['id'])) {
            $item = $model->ReadById($_GET['id']);
            ob_start();
            include (__DIR__.'/../view/updateForm.php');
            $result = ob_get_clean();
            return $result;
        }
        $model->UpdateById($_POST['Namt'], $_POST['Description'], $_POST['Created_at'], $_POST['id']);
        header('Locaton:read.php');
    }

    public function delete()
    {
        $model = new Article();
        $model->DeleteFromArticle($_GET['id']);
        header ('Location:read.php');
    }
}
