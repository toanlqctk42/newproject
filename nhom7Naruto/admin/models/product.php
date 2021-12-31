<?php
require_once 'library/database.php';
class Product{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    //Get all products
    public function get_products() {
        $this->db->query('SELECT * FROM menus');
        $query = $this->db->resultSet();
        return $query;
    }

    public function add($name, $price, $strImg, $unit, $idarea) {
        $this->db->query('INSERT INTO menus(NameMenu,Price, Images, Unit, Idcate) VALUES(:name, :price, :strImg, :unit, :idarea)');
        $this->db->bind(':name', $name);
        $this->db->bind(':price', $price);
        $this->db->bind(':strImg', $strImg);
        $this->db->bind(':unit', $unit);
        $this->db->bind(':idarea', $idarea);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>