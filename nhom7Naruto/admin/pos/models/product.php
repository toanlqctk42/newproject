<?php
require_once '../library/database.php';
class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_products()
    {
        $this->db->query('SELECT * FROM menus');
        $query = $this->db->resultSet();
        return $query;
    }
    public function getproductstocate($id)
    {
        $this->db->query('SELECT * FROM menus WHERE Idcate =:name');
        $this->db->bind(':name', $id);
        $query = $this->db->resultSet();
        return $query;
    }
    public function getproductstoid($id)
    {
        $this->db->query('SELECT * FROM menus WHERE Id =:name');
        $this->db->bind(':name', $id);
        $query = $this->db->resultSet();
        return $query;
    }

    public function searchmenu($name)
    {
        $this->db->query('CALL searchmenu(:name)');
        $this->db->bind(':name', $name);
        $count = $this->db->resultSet();
        return $count;
    }
}
