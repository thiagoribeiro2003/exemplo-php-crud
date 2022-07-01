<?php
namespace CrudPoo;
use PDO, Exception;

final class Produto 
{
    private int $id;
    private string $nome;
    private float $preco;
    private int $quantidade;
    private string $descricao;
    private int $fabricanteId;
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }


    public function lerProdutos():array {
        $sql = "SELECT produtos.id, 
         produtos.nome AS produto,
         produtos.descricao, 
         produtos.preco,
         produtos.quantidade, 
         fabricantes.nome AS fabricante
         FROM produtos INNER JOIN fabricantes 
         ON produtos.fabricante_id = fabricantes.id 
         ORDER BY produto";
    
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception $erro){
            die("Erro: ". $erro->getMessage());
        }
            return $resultado;
    }



        public function inserirProduto():void {
            $sql = "INSERT INTO produtos(nome, preco, quantidade, descricao, fabricante_id) VALUES(:nome, :preco, :quantidade, :descricao, :fabricante_id)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':nome', $this->nome, PDO::PARAM_STR); 
            $consulta->bindParam(':preco', $this->preco, PDO::PARAM_STR);
            $consulta->bindParam(':quantidade', $this->quantidade, PDO::PARAM_INT);
            $consulta->bindParam(':descricao', $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(':fabricante_id', $this->fabricanteId, PDO::PARAM_INT);
            $consulta->execute();      
        } catch (Exception $erro) {
            die ("Erro: ". $erro->getMessage());
        }
    }
    


    public function lerUmProduto():array{
        $sql = "SELECT id, nome, preco, quantidade, descricao, fabricante_id FROM produtos WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            $consulta-> execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch(Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }

        return $resultado;
    }



    
    public function atualizarProduto():void{
    $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade, descricao = :descricao, fabricante_id = :fabricanteId WHERE id = :id";

    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':id', $this->id, PDO::PARAM_INT); 
        $consulta->bindParam(':nome', $this->nome, PDO::PARAM_STR); 
        $consulta->bindParam(':preco', $this->preco, PDO::PARAM_STR);
        $consulta->bindParam(':quantidade', $this->quantidade, PDO::PARAM_INT);
        $consulta->bindParam(':descricao', $this->descricao, PDO::PARAM_STR);
        $consulta->bindParam(':fabricanteId', $this->fabricanteId, PDO::PARAM_INT);
        $consulta->execute();      
        
    } catch (Exception $erro) {
        die ("Erro: ". $erro->getMessage());
    }
}




    public function excluirProduto():void{
    $sql = "DELETE FROM produtos WHERE id = :id";
    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro: ".$erro->getMessage());
    }
}






    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT); 
    }

  

    public function getNome(): string
    {
        return $this->nome;
    }
  
    public function setNome(string $nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
    }



    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco(float $preco)
    {
        $this->preco = filter_var($preco, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }


  
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = filter_var($quantidade, FILTER_SANITIZE_NUMBER_INT);
    }

    

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);
    }


    
    public function getFabricanteId()
    {
        return $this->fabricanteId;
    }

    public function setFabricanteId(int $fabricanteId)
    {
        $this->fabricanteId = filter_var($fabricanteId, FILTER_SANITIZE_NUMBER_INT);
    }
}