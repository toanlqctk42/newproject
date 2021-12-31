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
        public function AddProduct() {
            if (isset($_POST['name'], $_POST['price'], $_POST['img'], $_POST['unit'], $_POST['idcate'])) {
                $this->product_model->add($_POST['name'], $_POST['price'], $_POST['img'], $_POST['unit'], $_POST['idcate']);
            } else echo"";
        }
    }
    $test = new Products;
    $prod = $test->getallproducts();

    if (isset($_POST['action']) && $_POST['action'] == 'addProd') {
        $addpro = $test->AddProduct();
        
    }
