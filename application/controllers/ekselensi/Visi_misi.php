<?php

    class Visi_misi extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('ekselensi/visi_misi');
            $this->load->view('templates/footer');
        }


    }



?>