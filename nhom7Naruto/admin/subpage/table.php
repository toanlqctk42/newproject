<?php require_once './controllers/tableController.php' ?>

<script type="text/javascript" src="public/js/load.js"></script>
<div class="row act">
	<div class="col-md-5">
		<h2>Phòng/Bàn</h2>
	</div>
	<div class="col-md-7 text-right action">
		<button class="btn btn-success" data-toggle="modal" data-target="#ModalAddTable" style="width: 165px;
    height: 40px;"><i class="fa fa-plus" aria-hidden="true"></i> Thêm phòng/bàn</button>
		<button class="btn btn-success" data-toggle="modal" data-target="#ModalAddGroup" style="width: 165px;
    height: 40px;"><i class="fa fa-list" aria-hidden="true"></i> Thêm nhóm</button>
	</div>
</div>

<div class="row content-table">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
			<thead class="table-primary">
				<tr>
					<th></th>
					<th>Tên phòng/bàn</th>
					<th>Ghi chú</th>
					<th>Nhóm</th>
					<th>Số ghế</th>
					<th>Trạng thái</th>
				</tr>
			</thead>
			<tbody id="load_pagination_table">
				<?php
				$table = new Table;
				$table_all = $table->getalltableArea();
				foreach ($table_all as $dataTable) { ?>
					<tr class="not-detail">
						<td data-toggle="collapse" data-target="#collapse-<?php echo $dataTable['Id']; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $dataTable['Id']; ?>">
							<i class="fa fa-plus-circle text-success" aria-hidden="true"></i>
						</td>
						<td><?php echo $dataTable['TableName']; ?></td>
						<td></td>
						<td><?php echo $dataTable['BranchName']; ?></td>
						<td></td>
						<td>
							<?php if ($dataTable['Status'] == 1) {
								echo 'Đang hoạt động';
							} else {
								echo 'Ngừng hoạt động';
							}
							?>
						</td>
					</tr>
					<tr class="collapse tr-detail table-detail" id="collapse-<?php echo $dataTable['Id']; ?>">
						<td colspan="8">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="row form-group">
										<div class="col-md-4">Tên phòng/Bàn</div>
										<div class="col-md-8"><?php echo $dataTable['TableName']; ?></div>
									</div>
									<div class="row form-group">
										<div class="col-md-4">Nhóm</div>
										<div class="col-md-8"><?php echo $dataTable['BranchName']; ?></div>
									</div>
									<div class="row">
										<div class="col-md-12 text-right">
											<button class="btn btn-success" data-toggle="modal" data-target="#ModelEditTable-<?php echo $dataTable['Id']; ?>"><i class="fa fa-check-square" aria-hidden="true"></i>Cập nhật</button>
											<button class="btn btn-danger"><i class="fa fa-lock" aria-hidden="true"></i>Ngừng hoạt động</button>
											<button class="btn btn-danger" data-toggle="modal" data-target="#ModelDelTable-<?php echo $dataTable['Id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>Xóa</button>
										</div>
									</div>
								</div>
							</div>
							<div class="modal fade" id="ModelDelTable-<?php echo $dataTable['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Đồng ý xóa bàn này</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" onclick="cms_del_table(<?php echo $dataTable['Id']; ?>)" class="btn btn-primary">Đồng Ý</button>
										</div>
									</div>
								</div>
							</div>
							<div class="modal fade" id="ModelEditTable-<?php echo $dataTable['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin bàn</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" onclick="cms_update_table(<?php echo $dataTable['Id']; ?>)" class="btn btn-primary">Lưu</button>
										</div>
									</div>
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
<!-- Modal add group -->
<div class="modal fade" id="ModalAddGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Thêm nhóm</h5>
			</div>
			<form action="./controllers/addgrouptable.php" method="POST">
				<input type="hidden" name="action" value="insert">
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-md-4">
							<label>Tên nhóm</label>
						</div>
						<div class="col-md-8">
							<input type="text" name="namgrouptable" placeholder="Nhập tên nhóm" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Bỏ qua</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal add table -->
<div class="modal fade" id="ModalAddTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Thêm Bàn</h5>
			</div>
			<form action="./controllers/addtable.php" method="POST">
				<input type="hidden" name="actiontable" value="inserttable">
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-md-4">
							<label>Tên Bàn <span style="color:red;">(*)</span></label>
						</div>
						<div class="col-md-8">
							<input type="text" name="tablename" placeholder="Nhập tên phòng/bàn" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-4">
							<label>Nhóm</label>
						</div>
						<div class="col-md-8">
							<select class="form-control" name="areas-id">
								<?php
								$area = new TableModel;
								$dataArea = $area->getallArea();
								foreach ($dataArea as $data) { ?>
									<option value="<?php echo $data->Id; ?>"><?php echo $data->BranchName; ?></option>
								<?php }

								?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="sumit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Bỏ qua</button>
				</div>
			</form>
		</div>
	</div>
</div>