<?php 
namespace RMA;

use RMA\Database;

class Usuario {
    private $db;

    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct()
    {
        $this->db = Database::conexao();
    }

    /**
     * metodo __set para setar os valores
     * @return $attr $valor
     */
    public function __set($attr, $valor){
        return $this->$attr = $valor;
    }// __set

    /**
     * metodo __get para recupera os valores
     */
    public function __get($attr){
        return $this->$attr;
    } // __get

    public function login(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $this->__get('email'));
        $sql->bindValue(":senha", $this->__get('senha'));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }
        return $dados;

    } // login

    public function getInfoUser(){
        $dados = array();

        $sql = $this->db->prepare('SELECT * FROM usuarios WHERE id = :id');
        $sql->bindValue(':id', $this->__get('id'));
        $sql->execute();

        if($sql->rowCount() > 0 ){
            $dados = $sql->fetch();
        }

        return $dados;
    }


} // Usuario

?>