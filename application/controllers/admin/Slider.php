<?php

    // halaman beranda
    class Slider extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }
            $data['barang'] = $this->SliderModel->tampil_data()->result();
            $this->load->view('templates/header_admin');
            $this->load->view('slider', $data);
            $this->load->view('templates/footer_admin');
        }
        public function delete(){
            $data = $this->uri->segment(4);
            $this->load->model("SliderModel");
            $this->SliderModel->delete($data);
            redirect('admin/slider');
        }


    }



?>