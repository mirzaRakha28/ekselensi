<?php

    // halaman beranda
    class Form_karir extends CI_Controller{

        public function index(){

            
            $this->load->view('templates/header_admin');
            $this->load->view('form_karir');
            $this->load->view('templates/footer_admin');
        }

        public function add_product(){
            // var_dump($_POST);
            // $job = $this->input->post('job');
            // $jenis = $this->input->post('jenis');
            // $gaji = $this->input->post('gaji');

            $job            = $_POST['job'];
            $deskripsi      = $_POST['deskripsi'];
            $gajiTerendah   = $_POST['gajiTerendah'];
            $gajiTertinggi  = $_POST['gajiTertinggi'];

            $jenis          = $_POST['jenis'];
            $namaPerusahaan = $_POST['namaPerusahaan'];
            $alamat         = $_POST['alamat'];
            
            $data = array(
                'job' => $job,
                'deskripsi'=>$deskripsi,
                'jenis' => $jenis,
                'gajiTerendah' =>$gajiTerendah,
                'gajiTertinggi' => $gajiTertinggi,
                'namaPerusahaan' => $namaPerusahaan,
                'alamat' => $alamat
             );
            // var_dump($gambar);
            $this->KarirModel->add_data($data,'karir');
            redirect('admin/karir');


        }

    }