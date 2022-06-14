<?php

class Compare extends Controller{
    function compare(){
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        $data = $_SESSION['compare'];

        $this->view('user', [
            'component'=>'compare',
            'title'=>'Compare',
            'user'=>$user,
            'brand'=>$brand,
            'category'=>$category,
            'material'=>$material,
            'compare'=>$data
        ]);
    }

    function addCompare($id){
        $data = [];
        $productModel = $this->model('ProductModel');
        $product_gemstoneModel = $this->model('Product_gemstoneModel');

        $product = $productModel->showProductDetail($id);
        $productGemstone = $product_gemstoneModel->showProduct_gemstone($id);

        $product[ "gemstone" ] = $productGemstone;

        if(isset($_SESSION['compare'])){
            $data = $_SESSION['compare'];
        }

        foreach ($data as $item) {
            if($item['id'] == $product['id']){
                header('Location: /project/compare');
                die();
            }
        }

        if(count($data) == 5){
            array_splice($data, 0, 1);
        }
        
        $data[] = $product;
        $_SESSION['compare'] = $data;

        header('Location: /project/compare');
    }
}