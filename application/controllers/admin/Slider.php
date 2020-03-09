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
            $del = $this->SliderModel->getGambar($data);
            $path='./assets/img/';
            unlink($path.$del->gambar) or die('failed deleting: ' . $path.$del->gambar);

            $this->SliderModel->delete($data);
            redirect('admin/slider');
        }

        public function edit($id){
            
            $data['slide']= $this->SliderModel->edit(intval($id));
            $this->load->view('templates/header_admin');
            $this->load->view('form_slider_update',$data);
            $this->load->view('templates/footer_admin');
        }
       
        

        public function update()
        {
            // var_dump($_POST);die();

        $title = $_POST['title'];
        $subtitle  = $_POST['subtitle'];
        $link   = $_POST['link'];
        $id     = $_POST['id'];
        // var_dump($id);
        // die();
        // $satuan      = $_POST['satuan'];
        // $minimum_quantity = intval($_POST['minimum_quantity']);
        // $kategori    = intval($_POST['keterangan']);
        // $subKategori = intval($_POST['subkategori']);
        $gambarLama  = $_POST['gambarLama'];
        // $keterangan  = $_POST['keterangan'];
        // $produk_id   = $_POST['id'];

            // update database
            $data = array(
                'title' => $title,
                'subtitle' => $subtitle,
                'link' => $link,
                'gambar'=> $gambarLama
                );

            $this->SliderModel->updateSliderByID($id,$data);

            if($this->db->affected_rows()){
                redirect('admin/slider');
            }
            redirect('admin/slider');
        }
        
    }



?>