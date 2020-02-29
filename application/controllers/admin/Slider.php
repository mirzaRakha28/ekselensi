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
            $this->SliderModel->delete($data);
            redirect('admin/slider');
        }

        public function edit($id){
            
            $data['slide']= $this->KarirModel->edit(intval($id));
            $this->load->view('templates/header_admin');
            $this->load->view('form_karir_update',$data);
            $this->load->view('templates/footer_admin');
        }
       
        

        public function update()
        {
            // var_dump($_POST);die();

            // ambil data datanya

            $job = $_POST['job'];
            $gaji       = $_POST['gaji'];
            $jenis   = $_POST['jenis'];
            $id     = $_POST['id'];
            // $satuan      = $_POST['satuan'];
            // $minimum_quantity = intval($_POST['minimum_quantity']);
            // $kategori    = intval($_POST['keterangan']);
            // $subKategori = intval($_POST['subkategori']);
            // $gambarLama  = $_POST['gambarLama'];
            // $keterangan  = $_POST['keterangan'];
            // $produk_id   = $_POST['id'];

            // if($_FILES['gambar']['error'] === 4){
            //     $gambar = $gambarLama;
            // }else {
            //     $gambar = $this->upload();

                // update database
                $data = array(
                    'job' => $job,
                    'gaji' => $gaji,
                    'jenis' => $jenis
                    
                 );

                $this->KarirModel->updateKarirByID($id,$data);

                if($this->db->affected_rows()){
                    redirect('admin/karir');
                }
                redirect('admin/karir');
            
        }
    }



?>