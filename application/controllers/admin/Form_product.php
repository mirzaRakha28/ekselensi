<?php

    // halaman beranda
    class Form_product extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('form_product');
            $this->load->view('templates/footer_admin');
        }


    }



?>