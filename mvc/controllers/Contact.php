<?php

class Contact extends Controller{
    function contact(){
        // check user account
        $user = '';
        if($this->checkUserLogin()){
            $user = $_SESSION['currentUser'];
        }

        //get header's information
        $category = $this->getCategory();
        $brand = $this->getBrand();
        $material = $this->getMaterial();

        // feedback
        if(!empty($_POST)){
            $fullname = $this->getPost('fullname');
            $email = $this->getPost('email');
            $phoneNo = $this->getPost('phoneNo');
            $subject_name = $this->getPost('subject_name');
            $note = $this->getPost('note');
            $created_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');
            
            $feedbackModel = $this->model('FeedbackModel');

            $feedbackModel->addFeedback($fullname, $email, $phoneNo, $subject_name, $note, $created_at);

        }

        //view
        $this->view('user', [
            'component'=>'contact',
            'title'=>'Contact Us',
            'user'=>$user,
            'category'=>$category, // dữ liệu lưu vào biến $data['category']
            'brand'=>$brand, // dữ liệu lưu vào biến $data['brand']
            'material'=>$material // dữ liệu lưu vào biến $data['material']
        ]);
    }
}