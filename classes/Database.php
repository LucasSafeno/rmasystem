<?php
namespace RMA;

class Database{
    private $host;
    private $username;
    private $password;
    private $database;
    public $connection;

    public function __construct($database, $host, $username, $password){
        $this->host     = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    } // construct

    public function connect(){
        try{
            $this->connection = new \PDO("mysql:dbaname=$this->database;host=$this->host", $this->username, $this->password);
            
        }catch(\PDOException $e){
            echo "Falhou :".$e->getMessage();
        }
    
    } // connect

    public function getConnection(){
        return $this->connection;
    } // getConnection


}// database

?>