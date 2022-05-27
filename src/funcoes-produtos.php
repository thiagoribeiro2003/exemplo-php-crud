<?php 
require_once "conecta.php";

// Carregar dados dos produtos
function lerProdutos(PDO $conexao):array {
    $sql = "SELECT produtos.id, 
     produtos.nome AS produto,
     produtos.descricao, 
     produtos.preco,
     produtos.quantidade, 
     fabricantes.nome AS fabricante
     FROM produtos INNER JOIN fabricantes 
     ON produtos.fabricante_id = fabricantes.id 
     ORDER BY produto";


function inserirProduto(PDO $conexao, string $nome, float $preco, int $quantidade, string $descricao, int $fabricanteId):void { // void indica sem retorno

    $sql = "INSERT INTO produtos(nome, preco, quantidade, descricao, fabricante_id) VALUES(:nome, :preco, :quantidade, :descricao, :fabricante_id)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR); 
        $consulta->bindParam(':preco', $preco, PDO::PARAM_STR);
        $consulta->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
        $consulta->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $consulta->bindParam(':fabricante_id', $fabricanteId, PDO::PARAM_INT);
        $consulta->execute();      
    } catch (Exception $erro) {
        die ("Erro: ". $erro->getMessage());
    }
}

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erro){
        die("Erro: ". $erro->getMessage());
    }
    return $resultado;
}

/* Funções utilitárias */
function dump($dados) {
    echo "<pre>";
    var_dump($dados);
    echo "</pre>";
}

function formataMoeda(float $valor):string {
    return "R$ ".number_format($valor, 2, ",", ".");
}