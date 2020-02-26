<?php

    // halaman beranda
    class Kategori extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('kategori');
            $this->load->view('templates/footer_admin');
        }


    }



?>