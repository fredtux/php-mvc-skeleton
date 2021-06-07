<?php

namespace myproject\Model;

use myproject\Controller\HelperReader;

class HomeModel extends MainModel {
    public static function getData(){
        $data['message'] = 'Hello World!';

        return $data;
    }
}