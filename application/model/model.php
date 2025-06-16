<?php
namespace Application\Model;

use Pdo;
use PDOException;

class model
{
    protected $connection;
    public function __construct()
    {
        if (!isset($connection)) {
            global  $dbName, $dbUserName, $dbPassword;
            try {
                $this->connection=new PDO("mysql:dbname=$dbName;host=localhost",$dbUserName,$dbPassword);
                   } catch (PDOException $e) {
                echo $e->getMessage();
            }
    
        }
    }
    
    protected function query($query,$value=null)
    {
        try {
            if ($value == null) {
                return $this->connection->query($query);
            }else {
                $stmt=$this->connection->prepare($query);
                $stmt->execute($value);
                return $stmt;
            }
    
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    protected function execute($query,$value=null)
    {
        try {
            if ($value == null) {
                $this->connection->exec($query);
            }else {
                $stmt=$this->connection->prepare($query);
                $stmt->execute($value);
            }
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    protected function closeConnection()
    {
        $this->connection=null;
    }
}