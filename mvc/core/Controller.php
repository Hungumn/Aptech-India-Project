<?php

class Controller{
    public function model($model){
        require_once('./mvc/models/'.$model.'.php');
        return new $model;
    }

    public function view($view, $data = []){
        require_once('./mvc/views/index.php');
    }

    public function getPost($key, $special = "'"){
        $value = '';

        if(isset($_POST[$key])){
            $value = $_POST[$key];

            $value = str_replace($special, "\\".$special, $value);
        }

        return $value;
    }

    public function getGet($key, $special = "'"){

        $value = '';

        if(isset($_GET[$key])){
            $value = $_GET[$key];
            
            $value = str_replace($special, "\\".$special, $value);
        }

        return $value;
    }
    
    public function getMD5Security($pwd){
        return md5(md5($pwd).'HKDJH6554hjfdk$@daf*(4fwd(aga');
    }

    public function checkLogin(){
        // session is keeping login
        if(isset($_SESSION['currentAdmin']) && $_SESSION['currentAdmin'] != null){
            return true;
        }

        // session disconnected
        if(isset($_COOKIE['adminToken'])){
            $account = $this->model('AccountModel');
            $data = $account->checkAdminToken($_COOKIE['adminToken']);

            if($data != null){
                $_SESSION['currentAdmin'] = $data;
                return true;
            }
        }

        return false;
    }

    public function checkUserLogin(){
        // session is keeping login
        if(isset($_SESSION['currentUser']) && $_SESSION['currentUser'] != null){
            return true;
        }

        // session disconnected
        if(isset($_COOKIE['userToken'])){
            $account = $this->model('AccountModel');
            $data = $account->checkAdminToken($_COOKIE['userToken']);

            if($data != null){
                $_SESSION['currentUser'] = $data;
                return true;
            }
        }

        return false;
    }

    public function getCategory(){
        $categoryModel = $this->model('CategoryModel');

        $data = $categoryModel->showCategory();

        return $data;
    }

    public function getBrand(){
        $brandModel = $this->model('BrandModel');

        return $brandModel->showBrand();
    }

    public function getMaterial(){
        $materialModel = $this->model('MaterialModel');

        return $materialModel->showMaterial();
    }
}