<?php
    class SliderModel extends CI_Model{
        public function tampil_data(){
            return $this->db->get('slide');
        }
        public function add_data($data,$table){
            return $this->db->insert($table, $data);
        }
        public function delete($data){
            $this->db->delete('slide',array('id'=>$data));

        }

        public function getSlides()
        {
            return $this->db->get('slide')->result();
        }
        public function edit($id){
            $this->db->from('slide');
            $this->db->where('id',$id);
            $query = $this->db->get();
            return $query->row();
        }
        public function getProductByProductID($product_Id)
        {
            return $this->db->get_where("slide",["id"=>$product_Id])->row();
        }

        public function updateSliderByID($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('slide',$data);
        }
    }
?>