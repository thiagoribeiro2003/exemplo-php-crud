<?php 
require_once "conecta.php";

// Carregar dados dos produtos
function lerProdutos(PDO $conexao):array {
    $sql = "SELECT id, nome, descricao, preco, quantidade, fabricante_id FROM produtos ORDER BY nome";

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