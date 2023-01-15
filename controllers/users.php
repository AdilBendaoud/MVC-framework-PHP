<?php
class Users extends Controller
{
    public function register()
    {
        $viewmodel = new UserModel;
        $this->retrunView($viewmodel->register(), true);
    }

    public function login()
    {
        $viewmodel = new UserModel;
        $this->retrunView($viewmodel->login(), true);
    }

    public function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header("Location:/");
    }
}