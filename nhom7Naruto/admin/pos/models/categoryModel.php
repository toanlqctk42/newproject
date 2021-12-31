<?php
require_once '../library/database.php';
class Categories{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    //Get all products
    public function get_categorieController() {
        $this->db->query('SELECT * FROM categories');
        $query = $this->db->resultSet();
        return $query;
    }
    public function get_products($Find) {
        $this->db->query('SELECT a.* from menus a INNER JOIN categories b ON a.Idcate = b.Id WHERE b.CateName = :find');
        $this->db->bind(':find', $Find);
        $query = $this->db->resultSet();
        return $query;
    }
}
