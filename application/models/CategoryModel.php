<?php 
    class CategoryModel extends CI_Model{
        public function getCategory($id)
        {
            return $this->db->get_where('kategori',['id'=>$id])->row();
        }
        public function AllCategory()
        {
            return $this->db->get('kategori')->result();
        }
        public function getAllCategory()
        {
            return $this->db->get_where('kategori', 1)->result();
        }
        public function editKategori($kategori,$deskripsi,$image,$bigImage)
        {
            $data = array(
                'kategori' => $kategori,
                'deskripsi' => $deskripsi,
                'image' => $image,
                'bigImage' =>$bigImage
             );
        
            $this->db->query(
                "UPDATE `kategori` 
                SET `deskripsi` = '$deskripsi', `image` = '$image', `bigImage` = '$bigImage'
                 WHERE `id` = $kategori");
        }
    }

?>