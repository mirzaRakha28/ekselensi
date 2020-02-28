<?php

    // halaman beranda
    class Form_kategori extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('form_kategori');
            $this->load->view('templates/footer_admin');
        }


    }



?>