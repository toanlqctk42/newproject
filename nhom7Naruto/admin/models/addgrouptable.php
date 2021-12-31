<?php
include('../library/database.php');

class Addarea{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function showarea($name) {
        $this->db->query("SELECT * FROM areas WHERE BranchName=:name");
        $this->db->bind(':name', $name);
        $row = $this->db->resultSet();
        return $row;
    }
    public function addgroudtable($name) {
        $this->db->query('INSERT INTO areas(BranchName,IdStore) VALUES(:name,9)');
        $this->db->bind(':name', $name);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}

?>