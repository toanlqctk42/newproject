<?php
session_start();
require_once '../library/database.php';
class User {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    //Find user by email or username
    public function findUserByEmailOrUsername($email, $username, $password) {
        $this->db->query("SELECT * FROM users WHERE UserName = :username AND Pass= :pass OR Email= :email AND Pass = :pass");
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':pass', $password);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        
    }

    //Login user
    public function login($name, $email, $password){
        $row = $this->findUserByEmailOrUsername($name, $email, $password);
        if($row == false){
            return false;
        }
        return $row;
    }
}
?>