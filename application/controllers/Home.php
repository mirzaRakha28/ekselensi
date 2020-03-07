<?php
    class Home extends CI_Controller{
        public function index()
        {
            $data['slider'] = $this->SliderModel->getSlides();

            // var_dump($data['slider']);die();
            $this->load->view('templates/header');
            $this->load->view('home',$data);
            $this->load->view('templates/footer');
        }
    }

?>