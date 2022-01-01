<?php
require_once (__DIR__ .'/../library/database.php');
class MenuModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function showOrders() {
        $this->db->query('SELECT * FROM `bill`');
        $array = $this->db->singlearr();
        if ($this->db->rowCount() > 0) {
            return $array;
        } else return false;
    }
    public function findOrder($id) {
        $this->db->query('SELECT * FROM `orders` WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function showAllBill() {
        $this->db->query('SELECT bill.Id,bill.create_at, bill.Totalprice,bill.Note,bill.Bill_Status, tables.TableName, users.UserName  FROM bill
        INNER JOIN users ON users.Id = bill.IdUser
        INNER JOIN tables ON tables.Id =bill.IdTable
        ORDER BY bill.id');
        $array = $this->db->singlearr();
        if ($this->db->rowCount() > 0) {
            return $array;
        } else return false;
    }

    public function getStatical_byYear($years){
        $this->db->query("SELECT month(bill.create_at)as months, SUM(Totalprice) as Price FROM bill WHERE YEAR(bill.create_at) = '$years'  group by months ");
        $array = $this->db->singlearr();
        if($this->db->rowCount() > 0){
            return $array;
        }else return false;
    }

    public function getStatistical_byMonth($month,$year){
        $this->db->query("SELECT day(bill.create_at)as days, SUM(Totalprice) as Price FROM bill WHERE YEAR(bill.create_at) = '$year'  AND  Month(bill.create_at) = '$month' group by days;");
        $array = $this->db->singlearr();
        if($this->db->rowCount() > 0){
            return $array;
        }else return false;
    }

    public function getYear(){
        $this->db->query('SELECT year(bill.create_at)as years FROM bill group by years');
        $array = $this->db->singlearr();
        if($this->db->rowCount() > 0){
            return $array;
        }else return false;
    }
}
