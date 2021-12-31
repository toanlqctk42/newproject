<?php
session_start();
if (isset($_SESSION['uid'])) {
	require_once('../library/database.php');
	require_once('header.php');
	require_once 'controllers/tableController.php';
	require_once 'controllers/categorieController.php';
	require_once 'controllers/products.php'

?>
	<div class="container-fluid">
		<div class="row content">
			<div class="col-md-6" id="table-list">
				<div class="row list-filter">
					<div class="col-md list-filter-content">
						<?php
						$dataAreas = new TableModel;
						$resultarea = $dataAreas->getallArea();
						foreach ($resultarea as $rowarea) { ?>
							<button style="width: 100px" class="btn btn-primary"><?php echo $rowarea->BranchName; ?></button>

						<?php }
						?>
					</div>
				</div>
				<div class="row table-list">
					<div class="col-md table-list-content">
						<ul>
							<?php
							$table = new TableModel;
							$resulttable = $table->getalltable();
							foreach ($resulttable as $rowtable => $value) { ?>
							<?php $name=$value->TableName?>
								<li <?php if ($value->Status == 1) {
										echo 'class="tb-active"';
									} ?> id="<?php echo $value->Id; ?>" onclick="cms_load_pos(<?php echo $value->Id; $name ?>)">
									<?php echo $name; ?>
								</li>
							<?php }
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6" id="pos" hidden="true">
				<div class="row list-filter">
					<div class="col-md list-filter-content">
						<button class="btn btn-primary active" onclick="cms_load_cate(0);">Tất Cả</button>
						<?php
						$catemenu = new categorieController;
						$resultcate = $catemenu->getallcategorieController();
						foreach ($resultcate as $rowcate) { ?>
							<button class="btn btn-primary active" onclick="cms_load_cate(<?php echo $rowcate->Id; ?>)">
								<?php echo $rowcate->CateName; ?>
							</button>
						<?php }
						?>

					</div>
				</div>
				<div class="row product-list">
					<div class="col-md product-list-content">
						<ul>
							<?php
							$menu = new Products;
							$resultmenu = $menu->getallproducts();
							foreach ($resultmenu as $rowmenu) { ?>
								<li><a href="#" onclick="cms_select_menu('<?php echo $rowmenu->Id; ?>')" title="<?php echo $rowmenu->NameMenu; ?>">
										<div class="img-product">
											<img src="../public/assets/images/<?php echo $rowmenu->Images; ?>">
										</div>
										<div class="product-info">
											<span class="product-name"><?php echo $rowmenu->NameMenu; ?></span><br>
											<strong><?php echo number_format($rowmenu->Price, 3); ?></strong>
										</div>
									</a>
								</li>
							<?php }
							?>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 content-listmenu" id="content-listmenu">
				<div class="row" id="bill-info">
					<div class="col-md-2 table-infor">

					</div>
				</div>
				<div class="row bill-detail">
					<div class="col-md-12 bill-detail-content">
						<table class="table table-bordered">
							<thead class="thead-light">
								<tr>
									<th scope="col">STT</th>
									<th scope="col">Tên sản phẩm</th>
									<th scope="col">Số lượng</th>
									<th scope="col">Gía bán</th>
									<th scope="col">Thành Tiền</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody id="pro_search_append">

							</tbody>
						</table>
					</div>
				</div>
				<div class="row bill-action">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 p-1">
								<textarea class="form-control" id="note-order" placeholder="Nhập ghi chú hóa đơn" rows="3"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6 p-1">
								<button type="button" class="btn-print" onclick="cms_save_table()"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh Toán </button>
							</div>
							<div class="col-md-6 col-xs-6 p-1">
								<button type="button" class="btn-pay" onclick="cms_save_oder()"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu (F10)</button>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row form-group">
							<label class="col-form-label col-md-4"><b>Tổng cộng</b></label>
							<div class="col-md-8">
								<input type="text" value="0" class="form-control total-pay" disabled="disabled">
							</div>
						</div>
						<div class="row form-group">
							<label class="col-form-label col-md-4"><b>Khách Đưa</b></label>
							<div class="col-md-8">
								<input type="text" class="form-control customer-pay" value="0" placeholder="Nhập số điền khách đưa">
							</div>
						</div>
						<div class="row form-group">
							<label class="col-form-label col-md-4"><b>Tiền thừa</b></label>
							<div class="col-md-8 excess-cash">
								0
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="alert-login">
	</div>
	<div class="modal fade" id="ModelAddcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	</body>

	</html>
<?php } else {
	header('Location:../login.php');
}
?>