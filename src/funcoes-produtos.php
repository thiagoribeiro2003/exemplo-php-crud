<?php 
require_once "conecta.php";

// Carregar dados dos produtos
function lerProdutos(PDO $conexao) {
    $sql = "SELECT id, nome, descricao, preco, quantidade, fabricante_id FROM produtos ORDER BY nome";

    try {

    } catch(Exception $erro){
        die("Erro: ". $erro->getMessage());
    }
}