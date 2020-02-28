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
        public function edit($id){
            $data['barang'] = $this->SliderModel->edit($id);
            $this->load->view('templates/header_admin');
            $this->load->view('edit_slider', $data);
            $this->load->view('templates/footer_admin'); 
            
        }
        
        public function update($id){
            $data = array(
                'title' => $this->input->post('title'),
                'subtitle' => $this->input->post('subtitle'),
                'link' => $this->input->post('link'),
                'gambar' => $this->input->post('gambar'),
            );
            $this->db->where('id',$id);
            $this->db->update('slide',$data);
            redirect('admin/slider');
        }


    }



?>