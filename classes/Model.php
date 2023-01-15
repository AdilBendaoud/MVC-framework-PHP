<?php
abstract class Model{
    protected $connection;
    protected $stmt;

    public function __construct(){
        $sdn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        $this->connection = new PDO($sdn, DB_USER, DB_PASS);
    }

    public function query($qry){
        $this->stmt = $this->connection->prepare($qry);
    }

    public function bindValue($param,$value,$type = null){
        switch(is_null($type)){
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
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function getData(){
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function inserted(){
        return $this->connection->lastInsertId();
    }
    public function getOneRaw(){
        $this->execute();
        return $this->stmt->fetch();
    }
}