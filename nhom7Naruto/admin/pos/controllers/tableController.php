<?php
    require_once './models/tableModel.php';
    class TableModel {
        private $table_model;
        public function __construct()
        {
            $this->table_model = new Table;
        }
        public function getalltable(){
            //get all products
            $data = $this->table_model->get_tables();
            return $data;
        }
        public function gettableArea(){
            $data=$this->table_model->getalltableArea();
            return $data;
        }
        public function getallArea(){
            $data=$this->table_model->get_Area();
            return $data;
        }
        public function counttable(){
            $data=$this->table_model->CountTable();
            return $data;
        }
        public function UpdateStatus($idtable){
            $data= $this->table_model->Updatetable($idtable);
        }
    }
?>