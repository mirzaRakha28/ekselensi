<?php

    // halaman beranda
    class Form_karir extends CI_Controller{

        public function index(){

            
            $this->load->view('templates/header_admin');
            $this->load->view('form_karir');
            $this->load->view('templates/footer_admin');
        }

        public function add_product(){
            var_dump($_POST);
            $job = $this->input->post('job');
            $jenis = $this->input->post('jenis');
            $gaji = $this->input->post('gaji');
            
            $data = array(
                'job' => $job,
                'jenis' => $jenis,
                'gaji' => $gaji
            );
            var_dump($gambar);
            $this->SliderModel->add_data($data,'karir');
            redirect('admin/karir');


        }

    }