<?php
$conn = mysqli_connect("localhost","root","","db_coffee");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_set_charset($conn,"utf8");

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbn = 'db_coffee';
    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbn;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    //Prepare statement with query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute()
    {
        return $this->stmt->execute( );
    }
    public function resultSet()
    {
        $this->execute();
        $data=$this->stmt->fetchAll(PDO::FETCH_OBJ);
        $this->stmt->closeCursor();
        return $data;
    }

    public function singlearr()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function singlenum()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_NUM);
    }
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
?>