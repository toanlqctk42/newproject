<?php
    require_once 'models/billdetail.php';
    class BillDetailController {
        private $billdetail;
        public function __construct()
        {
            $this->billdetail = new BillDetail;
        }
        public function getallBilldetailController(){
            $data = $this->billdetail->showBilldetail();
            return $data;
        }
        public function getbilldetail($ID){
            $data = $this->billdetail->findOrder($ID);
            
            return $data;
        }
    }
?>