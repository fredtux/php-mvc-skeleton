<?php

namespace myproject\View;

class HomeView extends MainView {
    public function __construct()
    {
        parent::__construct();
    }

    public function showHomePage($data){
        global $pageData;
        $pageData = $data;

        require_once PUBLIC_DIR_HTML . DIRECTORY_SEPARATOR . 'homePage.php';
    }
}