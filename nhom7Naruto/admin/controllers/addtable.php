<?php
include ('../models/addtable.php');
class addTable
{
    private $add_table_model;
    public function __construct()
    {
        $this->add_table_model = new addsTable;
    }

    public function AddTable()
    {
        if (isset($_POST['tablename']) && isset($_POST['areas-id'])) {
            $name = $_POST['tablename'];
            $idarea= $_POST['areas-id'];
            $this->add_table_model->addtable($name,$idarea);
        } else die('Có lỗi xảy ra');
    }
}


$test = new addTable;
if (isset($_POST['actiontable']) == 'inserttable') {
    $table = $test->AddTable();
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
} else die("Có lỗi xảy ra");
