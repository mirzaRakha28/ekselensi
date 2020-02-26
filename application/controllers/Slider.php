<?php

    // halaman beranda
    class Slider extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('slider');
            $this->load->view('templates/footer_admin');
        }


    }



?>