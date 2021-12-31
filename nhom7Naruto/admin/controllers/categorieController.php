<?php
    require_once 'models/categoryModel.php';
    class categorieController {
        private $product_model;
        public function __construct()
        {
            $this->product_model = new Categories;
        }
        public function getallcategorieController(){
            $data = $this->product_model->get_categorieController();
            return $data;
        }
        public function get_product_withcategory($NameMenu){
            $data = $this->product_model->get_products($NameMenu);
            
            return $data;
        }
    }
?>