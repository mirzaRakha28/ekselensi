<?php
    class ProductModel extends CI_Model{
        public function __construct()
        {
            parent::__construct();

        }

        public function getProduct($kategori=1,$subKategori=1)
        {
            return $this->db->get_where("produk",['kategori_id'=>$kategori,'subkategori_id'=>$subKategori])->result();
        }
    }
?>