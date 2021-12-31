<?php require_once './controllers/orderController.php' ?>
<?php require_once './controllers/MenuController.php' ?>


<div class="row customer-act act">
	<div class="col-md-5">
		<h2>Danh sách hóa đơn</h2>
	</div>
	<div class="col-md-7 text-right action">
		<a class="btn btn-primary" style="width:120px" href="./pos/"><i class="fa fa-desktop" aria-hidden="true"></i> Bán hàng</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered" id="table-child-event">
			<thead class="table-primary">
				<tr>
					<th></th>
					<th>Mã Hóa Đơn</th>
					<th>Thời gian</th>
					<th>Tổng tiền</th>
					<th>Ghi chú</th>
					<th>Trạng thái</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$order = new MenuModel;
				$data = $order->showAllBill();
			//	if ($data['I'] != null) {
					foreach ($data as $dataorder) { ?>
						<tr class="not-detail">
							<td data-toggle="collapse" data-target="#collapse-<?php echo $dataorder['Id']; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $dataorder['Id']; ?>">
								<i class="fa fa-plus-circle text-success" aria-hidden="true"></i>
							</td>
							<td><?php echo $dataorder['Id']; ?></td>
							<td><?php echo $dataorder['create_at']; ?></td>
							<td><?php echo number_format($dataorder['Totalprice'], 0); ?></td>
							<td><?php echo $dataorder['Note']; ?></td>
							<td>
								<?php if ($dataorder['Bill_Status'] == 1) {
									echo 'Đã Hoàn Thành';
								} else {
									echo 'Chưa Hoàn Thành';
								}
								?>
							</td>
						</tr>
						<tr class="collapse tr-detail td-detail " id="collapse-<?php echo $dataorder['Id']; ?>">
							<td colspan="8">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="row">
											<div class="col-md-4">
												<div class="row form-group">
													<label class="col-md-4">
														Mã hóa đơn
													</label>
													<div class="col-md-8">
														<strong><?php echo $dataorder['Id']; ?></strong>
													</div>
												</div>
												<div class="row form-group">
													<label class="col-md-4">
														Phòng/Bàn
													</label>
													<div class="col-md-8">
														<strong><?php echo $dataorder['TableName']; ?></strong>
													</div>
												</div>
												<div class="row form-group">
													<label class="col-md-4">
														Thời gian
													</label>
													<div class="col-md-8">
														<input type="text" name="" disabled="disabled" class="form-control" value="<?php echo $dataorder['create_at']; ?>">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="row form-group">
													<label class="col-md-4">
														Nhân Viên
													</label>
													<div class="col-md-8">
														<strong><?php echo $dataorder['UserName']; ?></strong>
													</div>
												</div>

											</div>
											<div class="col-md-4">
												<textarea rows="4" class="form-control"><?php echo $dataorder['Note']; ?></textarea>
											</div>
										</div>
										<table class="table table-striped table-bordered">
											<thead class="table-success">
												<tr>
													<th>Mã Sản phẩm</th>
													<th>Tên sản phẩm</th>
													<th>Số lượng</th>
													<th>ĐVT</th>
													<th>Gía bán</th>
													<th>Thành tiền</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$idDetail = $dataorder['Id'];
												$Billdetail = new BillDetail;
												$detail = $Billdetail->findOrder($idDetail);
												foreach ($detail as $detail_order) {
													// $idmenu = $detail_order['NameMenu'];
													// if($idDetail== $idmenu){
												?>
													<tr>
														<td><?php echo $detail_order->IdMenu; ?></td>
														<td><?php echo $detail_order->NameMenu; ?></td>
														<td><?php echo $detail_order->Quantity; ?></td>
														<td><?php echo $detail_order->Unit; ?></td>
														<td><?php echo number_format($detail_order->Price, 0); ?></td>
														<td><?php echo number_format($detail_order->Price * $detail_order->Quantity, 0); ?></td>
													</tr>
												<?php }

												?>
											</tbody>
										</table>
									</div>
								</div>
							</td>
						</tr>
				<?php }
					?>
			</tbody>
		</table>
	</div>
</div>