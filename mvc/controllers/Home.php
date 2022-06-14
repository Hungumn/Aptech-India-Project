<?php

class Home extends Controller{
    function home(){
        // check user account
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        // set model
        $productModel = $this->model('ProductModel');

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        // get product  
        $rings = $productModel->get10Ring();
        $bracelet = $productModel->get10Bracelet();
        $charm = $productModel->get10Charm();
        $necklace = $productModel->get10Necklace();
        $earring = $productModel->get10Earring();
        $bangle = $productModel->get10Bangle();

        // view 
        $this->view('user', [
            'component'=>'home',
            'title'=>'Home',
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material, // dữ liệu lưu vào biến $data['material']
            'ring'=>$rings,
            'bracelet'=>$bracelet,
            'charm'=>$charm,
            'earring'=>$earring,
            'necklace'=>$necklace,
            'bangle'=>$bangle
        ]);
    }
}