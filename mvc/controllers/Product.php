<?php

class Product extends Controller{
    function product(){
        // check user account
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //get product
        $productModel = $this->model('ProductModel');
        $gemstoneModel = $this->model('GemstoneModel');
        

        $product = $productModel->showProduct();
        $gemstone = $gemstoneModel->showGemstone();

        //view
        $this->view('user', [
            'component'=>'product',
            'title'=>'Product',
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material, // dữ liệu lưu vào biến $data['material']
            'gemstone'=>$gemstone,
            'product'=> $product
        ]);
    }

    function detail($id){
        // check user account
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }
        
        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //get product's detail
        $productModel = $this->model('ProductModel');
        $thumbnailModel = $this->model('ThumbnailModel');
        $product_gemstoneModel = $this->model('Product_gemstoneModel');
        $product_sizeModel = $this->model('Product_sizeModel');

        $product = $productModel->showProductDetail($id);
        $thumbnail = $thumbnailModel->getImg($id);
        $product_gemstone = $product_gemstoneModel->showProduct_gemstone($id);
        $product_size = $product_sizeModel->showProductSize($id);

        //view
        $this->view('user', [
            'component'=>'product-detail',
            'title'=>$product['title'],
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material, // dữ liệu lưu vào biến $data['material']
            'product'=>$product,
            'thumbnail'=>$thumbnail,
            'product_gemstone'=>$product_gemstone,
            'product_size'=>$product_size
        ]);
        
    }

    function category($id){
        // check user account  
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //get product
        $productModel = $this->model('ProductModel');
        $categoryModel = $this->model('CategoryModel');
        $gemstoneModel = $this->model('GemstoneModel');

        $categoryDetail = $categoryModel->showCategoryDetail($id);
        $product = $productModel->showProductByCategory($id);
        $gemstone = $gemstoneModel->showGemstone();

        $this->view('user', [
            'component'=>'product',
            'title'=>$categoryDetail['category_name'],
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material, // dữ liệu lưu vào biến $data['material']
            'gemstone'=>$gemstone,
            'product'=> $product
        ]);
        // header("Location: /project/product");
    }

    function brand($id){
        // check user account
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //get product
        $productModel = $this->model('ProductModel');
        $brandModel = $this->model('BrandModel');
        $gemstoneModel = $this->model('GemstoneModel');

        $brandDetail = $brandModel->showBrandDetail($id);
        $product = $productModel->showProductByBrand($id);
        $gemstone = $gemstoneModel->showGemstone();

        $this->view('user', [
            'component'=>'product',
            'title'=>$brandDetail['brand_name'],
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material, // dữ liệu lưu vào biến $data['material']
            'gemstone'=>$gemstone,
            'product'=> $product
        ]);
       
    }

    function material($id){
        // check user account
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //get product
        $productModel = $this->model('ProductModel');
        $materialModel = $this->model('MaterialModel');
        $gemstoneModel = $this->model('GemstoneModel');

        $materialDetail = $materialModel->showDetailMaterial($id);
        $product = $productModel->showProductByMaterial($id);
        $gemstone = $gemstoneModel->showGemstone();

        $this->view('user', [
            'component'=>'product',
            'title'=>$materialDetail['material_name'],
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material, // dữ liệu lưu vào biến $data['material']
            'gemstone'=>$gemstone,
            'product'=> $product
        ]);
    }
}