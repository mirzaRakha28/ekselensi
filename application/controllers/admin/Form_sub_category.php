<?php

    // halaman beranda
    class Form_sub_category extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('form_sub_category');
            $this->load->view('templates/footer_admin');
        }


    }



?>