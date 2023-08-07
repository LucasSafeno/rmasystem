<?php 
namespace RMA;

class Produtos{
    private $db;

    private $id;
    private $codigoInterno;
    private $cod_nf;
    private $descricao;
    private $valor_nf;
    private $valor_venda;
    private $data_compra;
    private $numero_nf;
    private $id_status;
    private $id_processo;
    private $data_processo;
    private $quantidade;

    public function __construct($db){
        $this->db = $db;
    } // construct

    public function verificaCodigo($codigo){
        $connection = $this->db->connection;

        $sql = "SELECT * FROM rmaysstem.produtos WHERE cod_interno = :codigo";
        $sql = $connection->prepare($sql);
        $sql->bindValue(":codigo", $codigo);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }
        return true;
    }

    public function cadastrarProduto($codigo, $descricao, $valor, $quantidade, $fornecedor, $cnpj, $data_compra, $nf_compra ){

        $connection = $this->db->connection;

        $sql = "INSERT INTO rmasystem.produtos SET codigo  = :codigo, descricao = :descricao, valor = :valor, quantidade = :quantidade, fornecedor = :fornecedor, cnpj = :cnpj,  data_compra = :data_compra, nf_compra = :nf_compra";
        $sql = $connection->prepare($sql);
        $sql->bindValue(":codigo", $codigo);
        $sql->bindValue(":valor",$valor);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":quantidade", $quantidade);
        $sql->bindValue(":fornecedor", $fornecedor);
        $sql->bindValue(":cnpj", $cnpj);
        $sql->bindValue(":data_compra", $data_compra);
        $sql->bindValue(":nf_compra", $nf_compra);  
        $sql->execute();

        

    }// cadastrarProduto


} // Produtos

?>