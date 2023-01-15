<?php
class UserModel extends Model
{
    public function register()
    {
        if ($_POST['submit']) {
            $this->query('INSERT INTO users (name,email,password) VALUES(:name, :email, :password)');
            $this->bindValue(':name', $_POST['name']);
            $this->bindValue(':email', $_POST['email']);
            $this->bindValue(':password', $_POST['password']);
            $this->execute();
            if ($this->inserted()) {
                header('Location:/users/login');
            }
            return;
        }
    }

    public function login()
    {
        if ($_POST['submit']) {
            $this->query('SELECT * FROM users WHERE email= :email AND password= :password');
            $this->bindValue(':email', $_POST['email']);
            $this->bindValue(':password', $_POST['password']);
            $raw = $this->getOneRaw();
            if ($raw) {
                $_SESSION['is_logged_id'] = true;
                $_SESSION['user_data'] = array(
                    'id' => $raw['id'],
                    'name' => $raw['name'],
                    'email' => $raw['email']
                );
                header('Location:/posts');
            } else {
                $_SESSION['is_logged_id'] = false;
                echo 'not correct';
            }
        }

    }
}