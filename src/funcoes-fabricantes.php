<?php
require_once "conecta.php";

// Carregar os dados dos fabricantes
function lerFabricantes(){
    $sql = "SELECT id,nome FROM fabricantes";
    $consulta = $conexao->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
}
?>