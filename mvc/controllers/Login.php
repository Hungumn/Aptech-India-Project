<?php
class Login extends Controller
{

    public $error;

    function login()
    {
        if($this->checkUserLogin()){
            header('Location: /project');
            die();
        }

        if (!empty($_POST)) {
            $email = $this->getPost('email');
            $pwd = $this->getMD5Security($this->getPost('pwd'));

            $accountModel = $this->model('AccountModel');
            $data = $accountModel->userLogin($email, $pwd);

            if ($data == null) {
                $this->error = 'Login Failed';
                header("Refresh:1");
                die();
            }

            $_SESSION['currentUser'] = $data;

            $token = $this->getMD5Security($data['email'] . time() . $data['id']);

            setcookie('userToken', $token, time() + 30 * 60, '/');

            $accountModel->createToken($token, $data['id']);

            header('Location: /project/cart');
        }

        $this->view('user', [
            'component' => 'login',
            'title' => 'Login',
            'error' => $this->error
        ]);
    }

    function logout(){
        if (!$this->checkUserLogin()) {
            header('Location: /project');
        }

        unset($_SESSION['currentUser']);
        setcookie('userToken', '', time(), "/");

        header("Location: /project");
    }
}
