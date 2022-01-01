<?php
require_once (__DIR__.'/../models/MenuModels.php');
include_once (__DIR__.'/../helpers/session_helper.php');

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

    public function getStatisticalByYear($year)
    {
        $result = $this->MenuModel->getStatical_byYear($year);
        return $result;
    }

    public function getStatisticalByMonth($month,$year)
    {
        $result = $this->MenuModel->getStatistical_byMonth($month, $year);
        return $result;
    }
}