<?php
session_start();
require_once('./controllers/orderController.php');
require_once('./controllers/tableController.php');
require_once('./controllers/MenuController.php');
if (isset($_POST['data'])) {
	$user = $_SESSION['uid'];
	$json = $_POST['data'];
	$sql = new OrderController;
	$show = $sql->ControllerShowAllOrder();
	$table_id = $json['table_id'];
	$detail = $json['detai_oder'];
	$note = $json['note'];
	$grand = 0;
	
	$table = new TableModel;
	$updatetable = $table->UpdateStatus($table_id);

	foreach ($detail as $value) {
		$idproduct = $value['id'];
		$quantity = $value['quantity'];
		$price = $value['price'];

		$totalEach = $quantity * $price;
		$grand += $totalEach;
		$_SESSION['total'] = $grand;
		$data = new BillDetailController;

		$insertorder= "INSERT INTO `bill` (`IdUser`, `IdTable`, `IdStore`, `create_at`, `Sale`, `Bill_Status`, `Totalprice`, `Note`) VALUES ('$user', '$table_id', '9',NULL,NULL,'0', '$grand', '$note')";
		$resultoder = mysqli_query($conn,$insertorder);

		$idbill=$sql->findOrderHandler($table_id);

		$insertdetail = "INSERT INTO billdetail (IdBill,IdMenu,Quantity,Price) VALUES('$idbill','$idproduct','$quantity','$price')";
		$resultdetail = mysqli_query($conn,$insertdetail);

		echo "<h3>Thông báo !</h3><p>Lưu đơn hàng thành công</p>";
	}
}
