<?php
require_once './library/database.php';
// require_once "../library/database.php";
class BillDetail {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function showBilldetail() {
        $this->db->query('SELECT * FROM `billdetail`');
        $array = $this->db->singlearr();
        if ($this->db->rowCount() > 0) {
            return $array;
        } else return false;
    }

    public function findOrder($id) {
        $this->db->query('SELECT * FROM billdetail
        INNER JOIN bill ON bill.Id = billdetail.IdBill
        INNER JOIN menus ON menus.Id =billdetail.IdMenu WHERE IdBill = :name');
        $this->db->bind(':name', $id);
        $row = $this->db->resultSet();
        return $row;
    }

    public function showAlldetail() {
        $this->db->query('SELECT * FROM billdetail
        INNER JOIN bill ON bill.Id = billdetail.IdBill
        INNER JOIN menus ON menus.Id =billdetail.IdMenu');
        $array = $this->db->singlearr();
        if ($this->db->rowCount() > 0) {
            return $array;
        } else return false;
    }
}
