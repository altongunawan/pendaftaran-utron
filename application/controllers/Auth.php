<?php

class Auth extends Controller {

    public function login() {
        $data['title'] = 'Login UTRON';
        $this->view('layout/header', $data);
        $this->view('login/index', $data);
    }

    public function loginAuth() {
        
        if (isset($_POST['email-address']) && isset($_POST['password'])) {
            $email_address = $_POST['email-address'];
            $password = $_POST['password'];
    
            $res = $this->model('UserModel')->authLogin($email_address, $password);

            if ($res) {
                $result = $this->model('UserModel')->getDataUser($res);
                $_SESSION['user'] = $result;
                $this->redirect('user');
            }
            
            $this->redirect('home', 'index');
        }
    }

    public function logoutAuth() {
        if (isset($_SESSION['user'])) session_destroy();
        $this->redirect('home');
    }

}