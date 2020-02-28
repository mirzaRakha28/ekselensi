<?php
    class SliderModel extends CI_Model{
        
        public function tampil_data(){
            return $this->db->get('slide');
        }
        public function add_data($data,$table){
            return $this->db->insert($table, $data);
        }
        public function delete($data){
            $this->db->where("id",$data);
            $this->db->delete("slide");
        }
        public function edit($data){
            $this->db->from('slide');
            $this->db->where('id',$data);
            $query = $this->db->get();
            return $query->row();
        }
    }
?>
