<?php
class Register extends Controller{

    public $error;

    function register(){
        $accountModel = $this->model('AccountModel');

        if(!empty($_POST)){
            $fullname = $this->getPost('fullname');
            $email = $this->getPost('email');
            $pwd = $this->getMD5Security($this->getPost('pwd'));
            $phoneNo = $this->getPost('phoneNo');
            $address = $this->getPost('address');
            $created_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H-i-s');

            $roles = $accountModel->showRole();
            $user_id = '';
            foreach ($roles as $role) {
                if($role['name'] == 'User'){
                    $user_id = $role['id'];
                }
            }
            if ($accountModel->checkAccount($email)) {
                $accountModel->createAccount($user_id, $pwd, $fullname, $address, $email, $phoneNo, $created_at);
                header("Location: /project/login");
            } else {
                $this->error = 'Account is exists';
            }
        }
        $this->view('user', [
            'component'=>'register',
            'title'=>'Register',
            'error'=>$this->error
        ]);
    }
}