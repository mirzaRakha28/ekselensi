<?php 
    class CategoryModel extends CI_Model{
        public function getCategory($id)
        {
            return $this->db->get_where('kategori',['id'=>$id])->row();
        }
        public function getAllCategory()
        {
            return $this->db->get_where('kategori', 1)->result();
        }
        public function editKategori($kategori,$deskripsi,$image)
        {
            $data = array(
                'kategori' => $kategori,
                'deskripsi' => $deskripsi,
                'image' => $image
             );
        
            $this->db->query(
                "UPDATE `kategori` 
                SET `deskripsi` = '$deskripsi', `image` = '$image'
                 WHERE `id` = $kategori");
        }
    }

?>