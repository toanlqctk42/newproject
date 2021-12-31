<?php
require_once('../library/database.php');
require_once 'controllers/tableController.php';
?>
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
				<li <?php if ($value->Status == 1) {
						echo 'class="tb-active"';
					} ?> id="<?php echo $value->Id; ?>" onclick="cms_load_pos(<?php echo $value->Id; ?>)">
					<?php echo $value->TableName; ?>
				</li> <?php }
						?>
		</ul>
	</div>
</div>