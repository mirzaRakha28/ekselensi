<?php

    // halaman beranda
    class Form_slider extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('form_slider');
            $this->load->view('templates/footer_admin');
        }


    }



?>