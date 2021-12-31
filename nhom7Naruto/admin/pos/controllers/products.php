<?php
    require_once 'models/product.php';
    class Products {
        private $product_model;
        public function __construct()
        {
            $this->product_model = new Product;
        }
        public function getallproducts(){
            //get all products
            $data = $this->product_model->get_products();
            return $data;
        }
        public function getallproductstocate($id){
            $data = $this->product_model->getproductstocate($id);
            return $data;
        }
        public function getallproductstoid($id){
            $data = $this->product_model->getproductstoid($id);
            return $data;
        }
        public function searchmenus($name)
        {
            $data = $this->product_model->searchmenu($name);
            return $data;
        }
    }
?>