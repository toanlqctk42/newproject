<?php
include('../library/database.php');
require_once 'controllers/orderController.php';
require_once 'controllers/MenuController.php';
if (isset($_POST['id_table'])) {
	$idtable = $_POST['id_table'];
	$data = new OrderController;
	$result = $data->findOrderHandler($idtable);
	$Status = $result->Bill_Status;
		if ($Status != 1) {
		$idbill = $result->Id;
		$dataBilldetail = new BillDetailController;
		$selectoder = $dataBilldetail->getbilldetail($idbill);
		foreach ($selectoder as $rows) { ?>
			<tr data-id="<?php echo $rows->IdMenu; ?>">
				<td><?php echo $rows->IdMenu; ?></td>
				<td><?php echo $rows->NameMenu; ?></td>
				<td>
					<div class="input-group-spinner">
						<input type="text" class="form-control quantity-product-oders" disabled="disabled" value="<?php echo $rows->Quantity; ?>">
					</div>
				</td>
				<td><input type="text" class="form-control price-order" disabled="disabled" name="" value="<?php echo number_format($rows->Price, 0); ?>"></td>
				<td class="text-center total-money"></td>
				<td class="text-center">
					<i class="fa fa-times-circle del-pro-order"></i>
				</td>
			</tr>
<?php }
	} else {
	}
} ?>