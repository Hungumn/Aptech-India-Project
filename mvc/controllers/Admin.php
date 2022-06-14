<?php

class Admin extends Controller
{

    public $error;

    // Home
    function home(){
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
            die();
        }
        $admin = $_SESSION['currentAdmin'];

        $this->view('admin', [
            'component'=>'home',
            'title'=>'Home',
            'error'=>$this->error,
            'admin'=>$admin
        ]);
    }

    // Account
    function login()
    {
        if ($this->checkLogin()) {
            header('Location: /project/admin/home');
            die();
        }

        if (!empty($_POST)) {
            $email = $this->getPost('email');
            $pwd = $this->getMD5Security($this->getPost('pwd'));

            $accountModel = $this->model('AccountModel');
            $data = $accountModel->adminLogin($email, $pwd);

            if ($data == null) {
                $this->error = 'Login Failed';
                header("Refresh:1");
                die();
            }

            $_SESSION['currentAdmin'] = $data;

            $token = $this->getMD5Security($data['email'] . time() . $data['id']);

            setcookie('adminToken', $token, time() + 30 * 60, '/');

            $accountModel->createToken($token, $data['id']);

            header('Location: /project/admin/home');
        }

        $this->view('admin', [
            'component' => 'login',
            'title' => 'Admin Login',
            'error' => $this->error
        ]);
    }

    function register()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $account = $this->model('AccountModel');
        $role = $account->showRole();
    

        if (!empty($_POST)) {
            $role_id = $this->getPost('role_id');
            $fullname = $this->getPost('fullname');
            $email = $this->getPost('email');
            $phoneNo = $this->getPost('phoneNo');
            $address = $this->getPost('address');
            $pwd = $this->getMD5Security($this->getPost('pwd'));
            $created_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            if ($account->checkAccount($email)) {
                $account->createAccount($role_id, $pwd, $fullname, $address, $email, $phoneNo, $created_at);
            } else {
                $this->error = 'Account is exists';
            }
        }

        $this->view('admin', [
            'component' => 'register',
            'title' => 'Account Register',
            'role' => $role,
            'error' => $this->error,
            'admin'=>$admin
        ]);
    }

    function logout()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        unset($_SESSION['currentAdmin']);
        setcookie('token', '', time(), "/");

        header('Location: /project/admin');
    }

    function adminAccount()
    {
        if (!$this->checkLogin()) {
            header('Location: project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $accountModel = $this->model('AccountModel');
        $data = $accountModel->showAdminAccount();

        $this->view('admin', [
            'component' => 'account',
            'title' => 'Admin Accounts',
            'account' => $data,
            'admin'=>$admin
        ]);
    }

    function userAccount()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $accountModel = $this->model('AccountModel');
        $data = $accountModel->showUserAccount();

        $this->view('admin', [
            'component' => 'account',
            'title' => 'User Account',
            'account' => $data,
            'admin'=>$admin
        ]);
    }

    function editAccount($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $accountModel = $this->model('AccountModel');
        $data = $accountModel->showAccountDetail($id);

        if (!empty($_POST)) {
            $email = $this->getPost('email');
            $fullname = $this->getPost('fullname');
            $phoneNo = $this->getPost('phoneNo');
            $address = $this->getPost('address');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            if ($accountModel->checkUpdateAccount($id, $email)) {
                $accountModel->editAccount($id, $email, $fullname, $phoneNo, $address, $updated_at);

                if ($_POST['pwd'] != null) {
                    $pwd = $this->getMD5Security($this->getPost('pwd'));

                    $accountModel->changePwd($id, $pwd);
                }

                if ($data['role'] == 'user') {
                    header('Location: /project/admin/userAccount');
                } else {
                    header("Location: /project/admin/adminAccount");
                }
            } else {
                $this->error = 'Account is exists';
            }
        }
        $this->view('admin', [
            'component' => 'editAccount',
            'title' => 'Edit Account',
            'error' => $this->error,
            'admin'=>$admin,
            'account' => $data
        ]);
    }

    function deleteAccount($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $accountModel = $this->model('AccountModel');

        $accountModel->deleteAccount($id);

        header("Location: /project/admin/adminAccount");
    }

    // Category
    function category()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $categoryModel = $this->model('CategoryModel');

        if (!empty($_POST)) {
            $category_name = $this->getPost('category');

            if ($categoryModel->checkCategory($category_name)) {
                $categoryModel->addCategory($category_name);
            } else {
                $this->error = 'Category already exists';
            }
        }

        $data = $categoryModel->showCategory();

        $this->view('admin', [
            'component' => 'category',
            'title' => 'Category',
            'admin'=>$admin,
            'category' => $data,
            'error' => $this->error
        ]);
    }

    function editCategory($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $categoryModel = $this->model('categoryModel');

        $data = $categoryModel->showCategoryDetail($id);

        if (!empty($_POST)) {
            $category_name = $this->getPost('category');

            if ($categoryModel->checkCategory($category_name)) {
                $categoryModel->editCategory($id, $category_name);
                header('Location: /project/admin/category');
            } else {
                $this->error = 'Category already exists';
            }
        }

        $this->view('admin', [
            'component' => 'editCategory',
            'title' => 'Edit Category',
            'admin'=>$admin,
            'category' => $data,
            'error' => $this->error
        ]);
    }

    function deleteCategory($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        // $categoryModel = $this->model('CategoryModel');

        // $categoryModel->deleteCategory($id);
    }

    // Gemstone
    function gemstone()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $gemstoneModel = $this->model('GemstoneModel');

        if (!empty($_POST)) {
            $gemstone_name = $this->getPost('gemstone');

            if ($gemstoneModel->checkGemstone($gemstone_name)) {
                $gemstoneModel->addGemstone($gemstone_name);
            } else {
                $this->error = 'Gemstone already exists!';
            }
        }
        $data = $gemstoneModel->showGemstone();

        $this->view('admin', [
            'component' => 'gemstone',
            'title' => 'Gemstone',
            'admin'=>$admin,
            'gemstone' => $data,
            'error' => $this->error
        ]);
    }

    function editGemstone($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $gemstoneModel = $this->model('GemstoneModel');

        $data = $gemstoneModel->showGemstoneDetail($id);

        if (!empty($_POST)) {
            $gemstone_name = $this->getPost('gemstone');

            if ($gemstoneModel->checkGemstone($gemstone_name)) {
                $gemstoneModel->editGemstone($id, $gemstone_name);
                header("Location: /project/admin/gemstone");
            } else {
                $this->error = 'Gemstone already exists!';
            }
        }

        $this->view('admin', [
            'component' => 'editGemstone',
            'title' => 'Edit Gemstone',
            'admin'=>$admin,
            'error' => $this->error,
            'gemstone' => $data
        ]);
    }

    function deleteGemstone($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $gemstoneModel = $this->model('GemstoneModel');

        $gemstoneModel->deleteGemstone($id);

        header('Location: /project/admin/gemstone');
    }

    // Material
    function material()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $materialModel = $this->model('MaterialModel');

        if (!empty($_POST)) {
            if (isset($_POST['material'])) {
                $material_name = $this->getPost('material');

                if (!$materialModel->checkMaterial($material_name)) {
                    $this->error = 'Material already exists';
                    header('Location: /project/admin/material');
                    die();
                }

                $materialModel->addMaterial($material_name);
            }

            if (isset($_POST['material_id'])) {
                $material_id = $_POST['material_id'];
                $color = $this->getPost('color');
                $age = $this->getPost('age');

                if (!$materialModel->checkMaterialDetail($material_id, $color, $age)) {
                    $this->error = 'Material Detail already exists';
                    header('Location: /project/admin/material');
                    die();
                }

                $materialModel->addMaterialDetail($material_id, $color, $age);
            }
        }

        $material = $materialModel->showMaterial();
        $materialDetail = $materialModel->showMaterialDetail();
        $this->view('admin', [
            'component' => 'material',
            'title' => 'Material',
            'admin'=>$admin,
            'material' => $material,
            'materialDetail' => $materialDetail,
            'error' => $this->error
        ]);
    }

    function editMaterial($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $materialModel = $this->model('MaterialModel');

        $data = $materialModel->showDetailMaterial($id);

        if (!empty($_POST)) {
            $material_name = $this->getPost('material');

            if ($materialModel->checkMaterial($material_name)) {
                $materialModel->editMaterial($id, $material_name);
                header('Location: /project/admin/material');
            } else {
                $this->error = 'Material already exists';
            }
        }

        $this->view('admin', [
            'component' => 'editMaterial',
            'title' => 'Edit Material',
            'admin'=>$admin,
            'error' => $this->error,
            'material' => $data
        ]);
    }

    function editMaterialDetail($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $materialModel = $this->model('MaterialModel');

        if (!empty($_POST)) {
            $material_id = $_POST['material_id'];
            $color = $this->getPost('color');
            $age = $this->getPost('age');

            if (!$materialModel->checkMaterialDetail($material_id, $color, $age)) {
                $this->error = 'Material Detail already exists';
            } else {
                $materialModel->updateMaterialDetail($id, $material_id, $color, $age);
                header('Location: /project/admin/material');
            }
        }
        $material = $materialModel->showMaterial();
        $materialDetail = $materialModel->showDetailMaterialDetail($id);

        $this->view('admin', [
            'component' => 'editMaterialDetail',
            'title' => 'Edit Material Detail',
            'admin'=>$admin,
            'error' => $this->error,
            'material' => $material,
            'materialDetail' => $materialDetail
        ]);
    }

    function deleteMaterial($id)
    {
    }

    // Brand
    function brand()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $brandModel = $this->model('BrandModel');

        if (!empty($_POST)) {
            $brand_name = $this->getPost('brand');

            if ($brandModel->checkBrand($brand_name)) {
                $brandModel->addBrand($brand_name);
            } else {
                $this->error = 'Brand already exists!';
            }
        }

        $data = $brandModel->showBrand();

        $this->view('admin', [
            'component' => 'brand',
            'title' => 'Brand',
            'admin'=>$admin,
            'brand' => $data,
            'error' => $this->error
        ]);
    }

    function editBrand($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $brandModel = $this->model('brandModel');

        $data = $brandModel->showBrandDetail($id);

        if (!empty($_POST)) {
            $brand_name = $this->getPost('brand');

            if ($brandModel->checkBrand($brand_name)) {
                $brandModel->editBrand($id, $brand_name);
                header('Location: /project/admin/brand');
            } else {
                $this->error = 'Brand already exists!';
            }
        }

        $this->view('admin', [
            'component' => 'editBrand',
            'title' => 'Edit Brand',
            'admin'=>$admin,
            'brand' => $data,
            'error' => $this->error
        ]);
    }

    function deleteBrand($id)
    {
    }

    // Size
    function size()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $categoryModel = $this->model('CategoryModel');
        $sizeModel = $this->model('SizeModel');
        $category = $categoryModel->showCategory();

        if (!empty($_POST)) {
            $category_id = $this->getPost('category_id');
            $size = $this->getPost('size');

            if ($sizeModel->checkSize($size, $category_id)) {
                $sizeModel->addSize($size, $category_id);
            } else {
                $this->error = "Size already exists";
            }
        }

        $size = $sizeModel->showSize();

        $this->view('admin', [
            'component' => 'size',
            'title' => 'Size',
            'admin'=>$admin,
            'category' => $category,
            'size' => $size,
            'error' => $this->error
        ]);
    }

    function editSize($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $sizeModel = $this->model('SizeModel');
        $categoryModel = $this->model('CategoryModel');

        $data = $sizeModel->showSizeDetail($id);
        $category = $categoryModel->showCategory();

        if (!empty($_POST)) {
            $size = $this->getPost('size');
            $category_id = $this->getPost('category_id');

            if ($sizeModel->checkSize($size, $category_id)) {
                $sizeModel->editSize($id, $size, $category_id);
                header('Location: /project/admin/size');
            } else {
                $this->error = "Size already exists";
            }
        }

        $this->view('admin', [
            'component' => 'editSize',
            'title' => 'Edit Size',
            'admin'=>$admin,
            'error' => $this->error,
            'size' => $data,
            'category' => $category
        ]);
    }

    function deleteSize($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $sizeModel = $this->model('SizeModel');

        $sizeModel->deleteSize($id);

        header('Location: /project/admin/size');
    }

    // Product
    function product()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $productModel = $this->model('ProductModel');

        $product = $productModel->showProduct();

        $this->view('admin', [
            'component' => 'product',
            'title' => 'Product',
            'admin'=>$admin,
            'product' => $product
        ]);
    }

    function createProduct()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $productModel = $this->model('ProductModel');
        $product_gemstoneModel = $this->model('Product_gemstoneModel');
        $product_sizeModel = $this->model('Product_sizeModel');

        $brand = $this->model('BrandModel')->showBrand();
        $category = $this->model('CategoryModel')->showCategory();
        $material = $this->model('MaterialModel')->showMaterial();
        $materialDetail = $this->model('MaterialModel')->showMaterialDetail();
        $gemstone = $this->model('GemstoneModel')->showGemstone();
        $size = $this->model('SizeModel')->showSize();

        if (!empty($_POST)) {
            $title = $this->getPost('title');
            $description = $this->getPost('description');
            $price = $this->getPost('price');
            $category_id = $_POST['category_id'];
            $brand_id = $_POST['brand_id'];
            $material_id = $_POST['material_detail'];
            $gender = $this->getPost('gender');

            $created_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $image = $_FILES['img']['name'];
            $image_tmp_name = $_FILES['img']['tmp_name'];
            $image_folder = './public/img/product/' . $image;

            if (!($productModel->checkProduct($title))) {
                $this->error = 'Product already exists';
                header("Location: /project/admin/createProduct");
                die();
            }

            if ($_FILES['img']['error'] > 0) {
                $this->error = 'Upload file failed';
                header("Location: /project/admin/createProduct");
                die();
            }

            if (!is_file($image_folder)) {
                move_uploaded_file($image_tmp_name, $image_folder);
            }
            $product_id = $productModel->createProduct($title, $description, $image_folder, $price, $gender, $category_id, $brand_id, $material_id, $created_at);

            if (isset($_POST['gemstone']) && count($_POST['gemstone']) != 0) {
                $productGemstone = $_POST['gemstone'];

                for ($i = 0; $i < count($productGemstone); $i++) {
                    if ($product_gemstoneModel->checkProduct_gemstone($product_id, $productGemstone[$i])) {
                        $product_gemstoneModel->createProduct_gemstone($product_id, $productGemstone[$i]);
                    }
                }
            }

            if (isset($_POST['size']) && count($_POST['size']) != 0) {
                $productSize = $_POST['size'];

                for ($i = 0; $i < count($productSize); $i++) {
                    if ($product_sizeModel->checkProduct_size($product_id, $productSize[$i])) {
                        $product_sizeModel->createProduct_size($product_id, $productSize[$i]);
                    }
                }
            }

            header("Location: /project/admin/productDetail/$product_id");
        }

        $this->view('admin', [
            'component' => 'createProduct',
            'title' => 'Create Product',
            'admin'=>$admin,
            'brand' => $brand,
            'category' => $category,
            'material' => $material,
            'materialDetail' => $materialDetail,
            'gemstone' => $gemstone,
            'size' => $size,
            'error' => $this->error
        ]);
    }

    function productDetail($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        // get Model
        $productModel = $this->model('ProductModel');
        $product_sizeModel = $this->model('Product_sizeModel');
        $product_gemstoneModel = $this->model('Product_gemstoneModel');
        $thumbnailModel = $this->model('ThumbnailModel');

        // get product's information
        $product = $productModel->showProductDetail($id);
        $product_size = $product_sizeModel->showProductSize($id);
        $product_gemstone = $product_gemstoneModel->showProduct_gemstone($id);
        $thumbnail = $thumbnailModel->getImg($id);

        // get information
        $brand = $this->model('BrandModel')->showBrand();
        $category = $this->model('CategoryModel')->showCategory();
        $material = $this->model('MaterialModel')->showMaterial();
        $materialDetail = $this->model('MaterialModel')->showMaterialDetail();
        $gemstone = $this->model('GemstoneModel')->showGemstone();
        $size = $this->model('SizeModel')->showSize();

        $this->view('admin', [
            'component' => 'productDetail',
            'title' => $product['title'],
            'admin'=>$admin,
            'error' => $this->error,
            'product' => $product,
            'product_size' => $product_size,
            'product_gemstone' => $product_gemstone,
            'thumbnail' => $thumbnail,
            'brand' => $brand,
            'category' => $category,
            'material' => $material,
            'materialDetail' => $materialDetail,
            'gemstone' => $gemstone,
            'size' => $size
        ]);
    }

    function editProductTitle($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $title = $this->getPost('title');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            if (!$productModel->checkProduct($title)) {
                $this->error = "This product already exists!";
                header("Location: /project/admin/productDetail/$id");
            } else {
                $productModel->editProductTitle($id, $title, $updated_at);
                header("Location: /project/admin/productDetail/$id");
            }
        }
    }

    function editMainThumbnail($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');
        $image = $_FILES['img']['name'];
        $image_tmp_name = $_FILES['img']['tmp_name'];
        $image_folder = './public/img/product/' . $image;

        if ($_FILES['img']['error'] > 0) {
            $this->error = 'Upload file failed';
            header("Location: /project/admin/productDetail/$id");
            die();
        }

        if (!is_file($image_folder)) {
            move_uploaded_file($image_tmp_name, $image_folder);
        }

        $data = $productModel->getImg($id);
        $productModel->editProductThumbnail($id, $image_folder, $updated_at);

        if ($image_folder != $data['thumbnail']) {
            if (is_file($data['thumbnail'])) {
                unlink($data['thumbnail']);
            }
        }

        header("Location: /project/admin/productDetail/$id");
    }

    function addSupportingThumbnail($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $thumbnailModel = $this->model('ThumbnailModel');

        $image = $_FILES['spimg']['name'];
        $image_tmp_name = $_FILES['spimg']['tmp_name'];
        $image_folder = './public/img/product/' . $image;

        if ($_FILES['img']['error'] > 0) {
            $this->error = 'Upload file failed';
            header("Location: /project/admin/productDetail/$id");
            die();
        }

        if (!is_file($image_folder)) {
            move_uploaded_file($image_tmp_name, $image_folder);
        }

        $thumbnailModel->addThumbnail($id, $image_folder);

        header("Location: /project/admin/productDetail/$id");
    }

    function deleteSupportingThumbnail($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $thumbnailModel = $this->model('ThumbnailModel');

        $data = $thumbnailModel->getThumbnail($id);
        $thumbnailModel->deleteThumbnail($id);

        $product_id = $data['product_id'];
        if (is_file($data['thumbnail'])) {
            unlink($data['thumbnail']);
        }

        header("Location: /project/admin/productDetail/$product_id");
    }

    function editProductDescription($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $description = $this->getPost('description');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $productModel->editProductDescription($id, $description, $updated_at);
            header("Location: /project/admin/productDetail/$id");
        }
    }

    function editProductPrice($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $price = $this->getPost('price');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $productModel->editProductPrice($id, $price, $updated_at);
            header("Location: /project/admin/productDetail/$id");
        }
    }

    function editProductGender($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $gender = $this->getPost('gender');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $productModel->editProductGender($id, $gender, $updated_at);
            header("Location: /project/admin/productDetail/$id");
        }
    }

    function editProductCategory($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $category_id = $this->getPost('category_id');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $productModel->editProductCategory($id, $category_id, $updated_at);
            header("Location: /project/admin/productDetail/$id");
        }
    }

    function editProductBrand($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $brand_id = $this->getPost('brand_id');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $productModel->editProductBrand($id, $brand_id, $updated_at);
            header("Location: /project/admin/productDetail/$id");
        }
    }

    function editProductMaterial($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $material_id = $this->getPost('material_detail');
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $productModel->editProductMaterial($id, $material_id, $updated_at);

            header("Location: /project/admin/productDetail/$id");
        }
    }

    function editProductSize($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $product_sizeModel = $this->model('Product_sizeModel');
        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $productSize = $_POST['size'];
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $product_sizeModel->deleteProductSize($id);

            for ($i = 0; $i < count($productSize); $i++) {
                if ($product_sizeModel->checkProduct_size($id, $productSize[$i])) {
                    $product_sizeModel->createProduct_size($id, $productSize[$i]);
                }
            }

            $productModel->editUpdatedAt($id, $updated_at);

            header("Location: /project/admin/productDetail/$id");
        }
    }

    function editProductGemstone($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $product_gemstoneModel = $this->model('Product_gemstoneModel');
        $productModel = $this->model('ProductModel');

        if (!empty($_POST)) {
            $productGemstone = $_POST['gemstone'];
            $updated_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $product_gemstoneModel->deleteProductGemstone($id);

            for ($i = 0; $i < count($productGemstone); $i++) {
                if ($product_gemstoneModel->checkProduct_gemstone($id, $productGemstone[$i])) {
                    $product_gemstoneModel->createProduct_gemstone($id, $productGemstone[$i]);
                }
            }

            $productModel->editUpdatedAt($id, $updated_at);

            header("Location: /project/admin/productDetail/$id");
        }
    }

    function deleteProduct($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');
        $deleted_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');
        $productModel->softDeleteProduct($id, $deleted_at);

        header('Location: /project/admin/product');
    }

    // Recycle
    function recycle()
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        $productModel = $this->model('ProductModel');
        $data = $productModel->showDeletedProduct();

        $this->view('admin', [
            'component' => 'recycle',
            'title' => 'Recycle Bin',
            'admin'=>$admin,
            'deletedProduct' => $data
        ]);
    }

    function restoreProduct($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');
        $productModel->restoreProduct($id);

        header('Location: /project/admin/product');
    }

    function destroyProduct($id)
    {
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }

        $productModel = $this->model('ProductModel');
        $thumbnailModel = $this->model('ThumbnailModel');

        // delete main image
        $data = $productModel->getImg($id);
        $imgUrl = $data['thumbnail'];

        if (is_file($imgUrl)) {
            unlink($imgUrl);
        }

        // delete supporting image
        $data = $thumbnailModel->getImg($id);
        foreach ($data as $imgUrl) {
            if (is_file($imgUrl['thumbnail'])) {
                unlink($imgUrl['thumbnail']);
            }
        }

        $productModel->destroyProduct($id);

        header('Location: /project/admin/recycle');
    }

    // Order
    function order(){
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        // get model
        $cartModel = $this->model('CartModel');

        $data = $cartModel->showAllOrdered();


        $this->view('admin', [
            'component'=>'order',
            'title'=>'Ordered Product',
            'admin'=>$admin,
            'order'=>$data
        ]);
    }

    function orderDetail($order_id){
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        // get model
        $cartModel = $this->model('CartModel');

        $order = $cartModel->showOrdered($order_id);
        $orderDetail = $cartModel->showOrderDetail($order_id);

        $this->view('admin', [
            'component'=>'orderDetail',
            'title'=>'Order Detail',
            'admin'=>$admin,
            'order'=>$order,
            'orderDetail'=>$orderDetail
        ]);
    }

    function feedback(){
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        // get model
        $feedbackModel = $this->model('FeedbackModel');
        $feedback = $feedbackModel->showFeedback();

        $this->view('admin', [
            'component'=>'feedback',
            'title'=>'Feedback',
            'admin'=>$admin,
            'feedback'=>$feedback
        ]);
    }

    function feedbackDetail($id){
        if (!$this->checkLogin()) {
            header('Location: /project/admin');
        }
        $admin = $_SESSION['currentAdmin'];

        // get model
        $feedbackModel = $this->model('FeedbackModel');

        $feedbackModel->readFeedback($id);
        $feedback = $feedbackModel->showFeedbackDetail($id);

        $this->view('admin', [
            'component'=>'feedbackDetail',
            'title'=>'Feedback Detail',
            'admin'=>$admin,
            'feedback'=>$feedback
        ]);
    }
}
