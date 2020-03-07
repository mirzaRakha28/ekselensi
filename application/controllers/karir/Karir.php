<?php

    class Karir extends CI_Controller{

        public function index(){

            $data['job'] = $this->KarirModel->getAllCareer();
            // var_dump($data['job']);die();
            $this->load->view('templates/header');
            $this->load->view('karir/karir',$data);
            $this->load->view('templates/footer');
        }


    }



?>