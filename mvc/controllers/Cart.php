<?php

class Cart extends Controller{
    public $error;

    function cart(){
        // check user account
        if(!$this->checkUserLogin()){
            header("Location: /project/login");
        }
        $user = $_SESSION['currentUser'];

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //get model
        $cartModel = $this->model('CartModel');

        $order = $cartModel->showPendingOrder($user['id']);
        $order_id = $cartModel->checkCart($user['id']);

        if(!empty($_POST)){
            $note = $this->getPost('note');
            $order_date = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $cartModel->updateOrder($order_id, 'ordered successfully', $note, $order_date);
        }

        $this->view('user', [
            'component'=>'cart',
            'title'=>'Cart',
            'user'=>$user,
            'category'=>$category,
            'brand'=>$brand,
            'material'=>$material,
            'error'=>$this->error,
            'order'=>$order
        ]);
    }

    function addCart($product_id){
        // check user account
        if(!$this->checkUserLogin()){
            header("Location: /project/login");
        }
        $user = $_SESSION['currentUser'];

        // get model
        $cartModel = $this->model('CartModel');
        $productModel = $this->model('ProductModel');

        $product = $productModel->showProductDetail($product_id);
        
        // check cart
        $data = $cartModel->checkCart($user['id']);

        if($data == null || count($data) == 0){
            $order_id = $cartModel->createCart($user['id']);
        }else{
            $order_id = $data['id'];
        }

        $size_id = $this->getPost('size_id');
        $quantity = $this->getPost('quantity');

        $checkCartDetail = $cartModel->checkCartDetail($order_id, $product_id, $size_id);

        if($checkCartDetail == null || count($checkCartDetail) == 0){
            $cartModel->addOrderDetail($order_id, $product_id, $size_id, $product['price'], $quantity);
        }else{
            $quantity = $checkCartDetail['quantity'] + 1;
            $cartModel->updateQuantity($checkCartDetail['id'], $quantity);
        }
        
        header("Location: /project/cart");
    }

    function orderedCart(){
        if(!$this->checkUserLogin()){
            header("Location: /project/login");
        }
        $user = $_SESSION['currentUser'];

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        //get model
        $cartModel = $this->model('CartModel');
        
        $order = $cartModel->showPendingOrder($user['id']);

        $this->view('user', [
            'component'=>'cart',
            'title'=>'Cart',
            'user'=>$user,
            'category'=>$category,
            'brand'=>$brand,
            'material'=>$material,
            'error'=>$this->error,
            'order'=>$order,
        ]);
    }

    function updateQuantity($orderDetail_id){
        if(!$this->checkUserLogin()){
            header("Location: /project/login");
        }

        $user = $_SESSION['currentUser'];

        //get model
        $cartModel = $this->model('CartModel');
        $quantity = $this->getPost('quantity');

        $cartModel->updateQuantity($orderDetail_id, $quantity);

        header("Location: /project/cart");
    }

    function deleteProduct($orderDetail_id){
        if(!$this->checkUserLogin()){
            header("Location: /project/login");
        }

        $user = $_SESSION['currentUser'];

        //get model
        $cartModel = $this->model('CartModel');

        $cartModel->deleteProduct($orderDetail_id);
        header("Location: /project/cart");
    }
}