<?php 
namespace RMA;
use RMA\Database;

class Fornecedor{

    private $id;
    private $nome_fantasia;
    private $cnpj;
    private $telefone;
    private $rua;
    private $bairro;
    private $cidade;
    private $cep;
    private $numero;
    private $estado;
    private $email;

    private $db; // conexão com banco de dados

    public function __construct(){
        $this->db = Database::conexao(); // realizar conexão
    }

    /**
     * método mágico auxiliador __set para setar os valores
     */

     public function __set($attr, $valor){
        $this->$attr = $valor;
     } // __set 

     /**
      * metodo mágixo auxliador __get para recuperar valores
      * @return $attr;
      */
      public function __get($attr){
        return $this->$attr;
      } // __get

      /**
       * Metodo para buscar CNPJ através da API
       * 
       * @return array
       */
       public function getCnpj(){
        $cnpj = $this->__get('cnpj');

        $url = "https://receitaws.com.br/v1/cnpj/".$cnpj;

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


        // for debug only
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $responseInArray = json_decode($resp, true);

        // retorna array com os dados
        return is_array($responseInArray) ? $responseInArray : [];


       } // getCnpj



}// fornecedor
?>