<?php 
namespace RMA;

use Exception;
use PDOException;

class Database{

    /**
     * Variavel que guarda conexão com PDo
     * @var PDO
     */
    protected static $db;

    /**
     * Contrustor privado  - garante que a classe só possar ser instanciada internamente
     */

     private function __construct()
     {
        
     }

     /**
      * Obtém uma instancia da conexão com banco de dados
      * @return PDO
      */
      public static function conexao(){
        if(static::$db == null){
            try{

                static::$db = new \PDO("mysql:host=localhost;dbname=vc_db", "root",);

                static::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                throw new Exception($e->getMessage());
            }

            return static::$db;
        }
      }


}// Database

?>