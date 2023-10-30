<?php 
namespace RMA;

use RMA\Database;

class Fornecedor{
  public $db; // conexão com banco de dados

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

  

    public function __construct(){
      $this->db = Database::conexao();// realizar conexão

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

       /**
        * metodo cadastrar forncedor no banco de dados
        * @return void
        */
       public function cadastrarFornecedor(){
        $dados = array();
        
        
        $sql = "INSERT INTO fornecedores  SET  cnpj = :cnpj, nome_fantasia = :nome_fantasia, telefone = :telefone, email = :email, rua = :rua, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, estado = :estado";
        $sql= $this->db->prepare($sql);
        $sql->bindValue(":cnpj", $this->__get('cnpj'));
        $sql->bindValue(":nome_fantasia", $this->__get('nome_fantasia'));
        $sql->bindValue(":telefone", $this->__get('telefone'));
        $sql->bindValue(":email", $this->__get('email'));
        $sql->bindValue(":rua", $this->__get('rua'));
        $sql->bindValue(":numero", $this->__get('numero'));
        $sql->bindValue(":complemento", $this->__get('complemento'));
        $sql->bindValue(":bairro", $this->__get('bairro'));
        $sql->bindValue(":cidade", $this->__get('cidade'));
        $sql->bindValue(":estado", $this->__get('estado'));
        $sql->execute();

        return true;

       } // cadastrarFornecedor


}// fornecedor
?>