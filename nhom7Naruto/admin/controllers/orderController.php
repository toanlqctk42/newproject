<?php
require_once './models/MenuModels.php';
include_once './helpers/session_helper.php';

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
}
