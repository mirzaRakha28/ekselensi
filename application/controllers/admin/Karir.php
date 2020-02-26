<?php

    // halaman beranda
    class Karir extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }
            $this->load->view('templates/header_admin');
            $this->load->view('karir');
            $this->load->view('templates/footer_admin');
        }


    }



?>