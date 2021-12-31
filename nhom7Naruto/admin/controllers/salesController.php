<?php 
require_once (__DIR__ .'/../models/MenuModels.php');
$data = array();
    $years = $_GET['years'];
    $order = new MenuModel;
    $result = $order->getSales($years);
    if(is_array($result)||is_object($result)){
        foreach($result as $row){
            $data[] = $row;
        }
    }
 echo json_encode($data);
