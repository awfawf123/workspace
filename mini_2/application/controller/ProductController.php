<?php
namespace application\controller;

class ProductController extends Controller{
    public function listGet(){
        $result = $this->model->getList(true);
        $this->addDynamicProPerty("result",$result);

        $result2 = $this->model->getList(false);
        $this->addDynamicProPerty("result2",$result2);

        return "list"._EXTENSION_PHP;
    }
    public function insertgoodsGet(){
       
        return "insertgoods"._EXTENSION_PHP;
    }

    public function insertgoodsPost(){
        $arrPost = $_POST;
        
        if(isset($_FILES['li_imgfile']['name'])){
            $imageFullName = strtolower($_FILES['li_imgfile']['name']);
            $imageNameSlice = explode(".",$imageFullName);
            $imageName = $imageNameSlice[0];
            $imageType = $imageNameSlice[1];
            $image_ext = array('jpg','jpeg','gif','png');
            if(array_search($imageType,$image_ext) === false){
                errMsg('jpg, jpeg, gif, png 확장자만 가능합니다.');
            }
            $dir = _ROOT."/application/view/image/";
            $arrPost["li_imgfile"] = "/application/view/image/".basename($_FILES["li_imgfile"]["name"]);
            move_uploaded_file($_FILES['li_imgfile']['tmp_name'],$dir.basename($_FILES["li_imgfile"]["name"]));
         }

         // --------트랜잭션 시작-----------
        $this->model->beginTransaction();

        // list insert
        if(!$this->model->insertList($arrPost)){
            $this->model->rollback();
            echo "User Regist ERROR";
            exit();
        }
        $this->model->commit();
        // --------트랜잭션 종료-----------

         return _BASE_REDIRECT."/product/list";
    }
}