<?php
include('../models/addgrouptable.php');
class AddGroup {
	private $addTableModel;
	public function __construct()
	{
		$this->addTableModel = new Addarea;
	}

	public function AddArea() {
		if (isset($_POST['namgrouptable'])) {
			$this->addTableModel->addgroudtable($_POST['namgrouptable']);
		} else die('Có lỗi xảy ra');
	}
}

$test = new AddGroup;
if (isset($_POST['action']) == 'insert') {
	$area = $test->AddArea();
	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit;
} else die("Có lỗi xảy ra");