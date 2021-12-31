<?php
	require_once('../library/database.php');
	require_once 'controllers/products.php';
	if (isset($_POST['id_menu'])) {
		$id = $_POST['id_menu'];
		$sql = new Products;
		$result = $sql->getallproductstoid($id);
		foreach ($result as $rows) { ?>
			<tr data-id="<?php echo $rows->Id; ?>">
				<td><?php echo $rows->Id; ?></td>
				<td><?php echo $rows->NameMenu; ?></td>
				<td>
					<div class="input-group spinner">
						<input type="text" class="form-control quantity-product-oders" disabled="disabled" name="" value="1">
					</div>
				</td>
				<td><input type="text" class="form-control price-order" disabled="disabled" name="" value="<?php echo number_format($rows->Price, 0); ?>"></td>
				<td class="text-center total-money"><?php echo number_format($rows->Price, 0); ?></td>
				<td class="text-center">
					<i class="fa fa-times-circle del-pro-order"></i>
				</td>
			</tr>
	<?php }
	}
?>