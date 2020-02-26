<?php

    // halaman beranda
    class Karir extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('karir');
            $this->load->view('templates/footer_admin');
        }


    }



?>