<?php

    // halaman beranda
    class Karir extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }
            $data['kerja'] = $this->KarirModel->tampil_data()->result();
            $this->load->view('templates/header_admin');
            $this->load->view('karir',$data);
            $this->load->view('templates/footer_admin');
        }
        public function delete(){
            $data = $this->uri->segment(4);
            $this->KarirModel->delete($data);
            redirect('admin/karir');
        }
        public function edit($id){
            $data['kerja']= $this->SliderModel->edit($id);
            $this->load->view('templates/header_admin');
            $this->load->view('form_karir_update',$data);
            $this->load->view('templates/footer_admin');
        }


    }



?>