<?php

    class Filosofi extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('ekselensi/filosofi');
            $this->load->view('templates/footer');
        }


    }



?>