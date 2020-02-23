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

        public function getProductByProductID($product_Id)
        {
            return $this->db->get_where("produk",["id"=>$product_Id])->row();
        }

        public function getAsc()
		{
			$this->db->order_by('harga', 'asc');
			return $this->db->get('produk')->result();
		}
		public function getDesc()
		{
			$this->db->order_by('harga', 'desc');
			return $this->db->get('produk')->result();
		}
    }
?>