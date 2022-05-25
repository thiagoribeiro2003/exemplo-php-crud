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