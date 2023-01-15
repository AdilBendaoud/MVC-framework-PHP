<?php
class PostModel extends Model
{
    public function index()
    {
        $this->query('SELECT * FROM posts join users on users.id = posts.idUser ORDER BY creationDate DESC');
        $rows = $this->getData();
        return $rows;
    }

    public function add()
    {
        if ($_POST['submit']) {
            $this->query('INSERT INTO posts (title,body,idUser) VALUES(:title, :body, :id)');
            $this->bindValue(':title', $_POST['title']);
            $this->bindValue(':body', $_POST['body']);
            $this->bindValue(':id', $_POST['id']);
            $this->execute();
            if ($this->inserted()) {
                header('Location:/posts');
            }
            return;
        }
    }
}