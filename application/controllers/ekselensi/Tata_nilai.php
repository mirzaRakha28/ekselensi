<?php

    class Tata_nilai extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('ekselensi/tata_nilai');
            $this->load->view('templates/footer');
        }


    }



?>