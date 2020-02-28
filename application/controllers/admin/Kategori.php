<?php

    // halaman beranda
    class Kategori extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }
            $data['kategori'] = $this->db->query("SELECT * FROM `kategori`")->result();
            
            $this->load->view('templates/header_admin');
            $this->load->view('kategori',$data);
            $this->load->view('templates/footer_admin');
        }


    }



?>