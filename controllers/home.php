<?php
class Home extends Controller{
    protected function index(){
        $viewmodel = new HomeModel;
        $this->retrunView($viewmodel->index(), true);
    }
}