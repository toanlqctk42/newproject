<?php
require_once './models/ordermodel.php';
include_once '../helpers/session_helper.php';

class OrderController
{
    private $MenuModel;
    public function __construct()
    {
        $this->MenuModel = new MenuModel;
    }
    public function ControllerShowAllOrder()
    {
        $orderSingle = $this->MenuModel->showOrders();
        return $orderSingle;
    }
    public function findOrderHandler($id)
    {
        $findOrder = $this->MenuModel->findOrder($id);
        return $findOrder;
    }
    public function inser($iduser, $idtable, $totalprice,$note)
    {
        $inserOrder=$this->MenuModel->inserOrder($iduser, $idtable, $totalprice,$note);
        return $inserOrder;
    }
}