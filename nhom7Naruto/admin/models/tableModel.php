<?php
require_once './library/database.php';
class Table{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function get_tables() {
        $this->db->query('SELECT * FROM tables');
        $query = $this->db->resultSet();
        return $query;
    }

    public function getalltableArea(){
        $this->db->query('SELECT * FROM tables
        INNER JOIN areas ON areas.Id = tables.IdArea');
        $array = $this->db->singlearr();
        if ($this->db->rowCount() > 0) {
            return $array;
        } else return false;
    }
    public function get_Area() {
        $this->db->query('SELECT * FROM areas');
        $query = $this->db->resultSet();
        return $query;
    }
    public function CountTable(){
        $this->db->query('SELECT COUNT(*) as postNum FROM tables');
        $query = $this->db->resultSet();
        return $query;
    }
}
?>