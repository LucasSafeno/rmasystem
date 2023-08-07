<?php 
namespace RMA;

class User{
    private $db;

    public function __construct($db){
        $this->db = $db;
    } // construct

    public function verificaLogin($email, $senha){
        $connection = $this->db->connection;
        

        $sql = "SELECT * FROM rmasystem.usuarios WHERE email = :email AND senha = :senha";
        $sql = $connection->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();


        $dados = array();
        if($sql->rowCount() > 0 ){
            $dados = $sql->fetch();
           $_SESSION['id'] = $dados['id'];
        }

        return $dados;
    }// verificaLogin

    public function getUser($id){
        $connection = $this->db->connection;

        $sql = "SELECT * FROM rmasystem.usuarios WHERE id =  :id";
        $sql = $connection->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        $array = array();
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }



} // user


?>