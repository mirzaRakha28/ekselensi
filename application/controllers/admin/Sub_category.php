<?php

    // halaman beranda
    class Sub_category extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }
            $this->load->view('templates/header_admin');
            $this->load->view('sub_category');
            $this->load->view('templates/footer_admin');
        }


    }



?>