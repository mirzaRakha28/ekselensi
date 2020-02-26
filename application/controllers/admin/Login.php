<?php

    class Login extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }


        public function index()
        {
            if(isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin']== true){
                redirect(base_url('admin/product'));
            }
            // $this->load->view('templates/header_admin');
            $this->load->view('login_admin');
            // $this->load->view('templates/footer_admin');
        }

        public function userLogin()
        {
            if(isset($_POST)){
                if(isset($_POST['username'])){
                    $email = htmlspecialchars($_POST['username']);
                    $pass  = htmlspecialchars($_POST['password']);
                    $admin    = $this->AdminModel->getAdminByEmail($email);

                    if($admin > 0 ){
                        foreach ($admin as $key => $value) {
                            // var_dump($value->password == md5("hello"));die();
                            if($value->password == md5($pass)){
                                $_SESSION['isAdminLogin'] = true;
                                redirect(base_url('admin/product'));
                            }else {
                                // berikan pesan kalo login gagal
                                $_SESSION['loginGagal'] = true;
                                redirect(base_url('admin'));
                            } 
                        }
                    }else {
                        // berikan pesan kalo login gagal
                        $_SESSION['loginGagal'] = true;
                        redirect(base_url('admin'));
                    }

                }
                 // berikan pesan kalo login gagal
                 $_SESSION['loginGagal'] = true;
                 redirect(base_url('admin'));
            }
             // berikan pesan kalo login gagal
             $_SESSION['loginGagal'] = true;
             redirect(base_url('admin'));
        }
    }
?>