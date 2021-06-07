<?php

namespace myproject\Controller;

use myproject\Model\HomeModel;
use myproject\View\HomeView;

class HomeController {
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }

    public function showHomePage(){
        $data = HomeModel::getData();

        $this->view->showHomePage($data);
    }
}