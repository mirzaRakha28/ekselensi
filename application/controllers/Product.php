<?php

    // halaman beranda
    class Product extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('product');
            $this->load->view('templates/footer_admin');
        }


    }



?>