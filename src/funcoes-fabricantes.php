<?php
require_once "conecta.php";

// Carregar os dados dos fabricantes
function lerFabricantes(PDO $conexao):array {
    $sql = "SELECT id,nome FROM fabricantes ORDER BY nome";
    try {   
    $consulta = $conexao->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erro) {
        die("Erro: ".$erro->getMessage());
    }
    return $resultado;
}

// Inserir um fabricante
function inserirFabricante(PDO $conexao, string $nome) {
    
}
?>