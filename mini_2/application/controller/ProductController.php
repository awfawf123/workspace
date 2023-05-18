<?php
namespace application\controller;

class ProductController extends Controller{
    public function listGet(){
        $result = $this->model->getList();
        $this->addDynamicProPerty("result",$result);

        return "list"._EXTENSION_PHP;
    }
    public function insertgoodsGet(){

        return "insertgoods"._EXTENSION_PHP;
    }
}