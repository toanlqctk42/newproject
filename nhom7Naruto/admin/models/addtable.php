<?php
require_once '../library/database.php';
class addsTable
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addtable($name, $idarea)
    {
        $this->db->query('INSERT INTO tables(TableName,Status,IdArea) VALUES(:name,"0",:idarea)');
        $this->db->bind(':name', $name);
        $this->db->bind(':idarea', $idarea);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
