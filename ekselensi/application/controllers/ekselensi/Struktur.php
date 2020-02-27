<?php

    class Struktur extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('ekselensi/struktur');
            $this->load->view('templates/footer');
        }


    }



?>