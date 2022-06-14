<?php

class About extends Controller{
    function about(){
        // check user account
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //view
        $this->view('user', [
            'component'=>'about',
            'title'=>'About Us',
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material // dữ liệu lưu vào biến $data['material']
        ]);
    }
}