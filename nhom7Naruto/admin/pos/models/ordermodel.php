<?php
require_once '../library/database.php';
class MenuModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function showOrders()
    {
        $this->db->query('SELECT * FROM `bill`');
        $array = $this->db->singlearr();
        if ($this->db->rowCount() > 0) {
            return $array;
        } else return false;
    }
    public function findOrder($id)
    {
        $this->db->query('SELECT * FROM `bill` WHERE IdTable = :id ');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function showAllBill()
    {
        $this->db->query('SELECT * FROM bill
        INNER JOIN users ON users.Id = bill.IdUser
        INNER JOIN tables ON tables.Id =bill.IdTable');
        $array = $this->db->singlearr();
        if ($this->db->rowCount() > 0) {
            return $array;
        } else return false;
    }
    public function inserOrder($iduser, $idtable, $totalprice, $note)
    {
        $this->db->query("INSERT INTO `bill` (IdUser,Idtable,IdStore,create_at,Sale,Bill_Status,Totalprice,Note) VALUES (IdUser = :iduser, Idtable = :idtable, IdStore = '9', create_at = null, Sale = null, Bill_Status='0', Totalprice = :totalprice, Note=:note)");
        $this->db->bind(':iduser', $iduser);
        $this->db->bind(':idtable', $idtable);
        $this->db->bind(':totalprice', $totalprice);
        $this->db->bind(':note', $note);
        $this->db->execute();
        $query = $this->db->resultSet();
        return $query;
    }
}
