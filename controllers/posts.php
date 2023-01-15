<?php
class Posts extends Controller
{
    protected function index()
    {
        $viewmodel = new PostModel;
        $this->retrunView($viewmodel->index(), true);
    }

    protected function add(){
        if(!isset($_SESSION['is_logged_id'])) {
            header("Location:/posts");
        }
        $viewmodel = new PostModel;
        $this->retrunView($viewmodel->add(), true);
    }
}