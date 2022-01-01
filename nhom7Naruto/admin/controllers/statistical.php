<?php
require_once('orderController.php');
$data = array();
if (isset($_REQUEST['years'])) {
    $years = $_REQUEST['years'];
}

if (isset($_REQUEST['months']))
{
    $month = $_REQUEST['months'];
}

if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];

        $orderController = new OrderController();
        $result = array();

        switch ($action) {
            case 'getbyYear':
                $result = $orderController->getStatisticalByYear($years);
                break;
            case 'getbyMonth':
                $result = $orderController->getStatisticalByMonth($month,$years);
                break;
        }

        if (is_array($result) || is_object($result)) {
            foreach ($result as $row) {
                $data[] = $row;
            }
        }
    }
echo json_encode($data);
