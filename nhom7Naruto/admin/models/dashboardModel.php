<?php
require_once './library/database.php';
class DashboardModels {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function showDashboard($status) {
        $this->db->query('SELECT COUNT(Bill_Status) FROM `bill` WHERE `Bill_Status` = :status');
        $this->db->bind(':status', $status);
        $row = $this->db->singlenum();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
}
?>