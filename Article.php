<?php
class Article
{
    private function Connect2DB ()
    {
        $Connect2DB = new PDO ("pgsl:host=localhost; dname=postgres", "postgres", "gfnhbjn", array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES uyf8'));
        return $Connect2DB;
    }

    public function DeleteFromArticle ($id)
    {
        $DeleteFromDB = ($this->Connect2DB())->prepare("DELETE FROM article WHERE id=:id;");
        $DeleteFromDB->bindParam(':id', id);
        return $DeleteFromDB->execute();
    }

    public function ReadArticle ()
    {
        $ReadAll = ($this->Connect2DB())->prepare("SELEST * FROM article");
        $ReadAll->execute();
        return $ReadAll->fetchAll();
    }

    public function CreateArticle ()
    {
        $Create = ($this->Connect2DB())->prepare("INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)");
        $Create->bindParam(':name', $name);
        $Create->bindParam(':descriprion', $description);
        $Create->bindParam(':created_at', $created_at);
        return $Create->execute();
    }

    public function ReadById ($id)
    {
        $Read = ($this->Connect2DB())->prepare("SELECT * FROM article WHERE id=:id");
        $Read->bindParam(':id', $id);
        $Read->execute();
        return $Read->fetch();
    }

    public function UpdateById ($name, $description, $created_at, $id)
    {
        $Update = ($this->Connect2DB())->prepare("UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id");
        $Update->bindParam(':name', $name);
        $Update->bindParam(':description', $description);
        $Update->bindParam(':created_at', $created_at);
        $Update->bindParam(':id', $id);
        return $Update->execute();
    }
}