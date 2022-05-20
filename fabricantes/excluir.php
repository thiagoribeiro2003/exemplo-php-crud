<?php 
require_once "../src/funcoes-fabricantes.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirFabricante($conexao, $id);
header("location:listar.php");

?>
<script>
    var msg=confirm("Deseja realmente excluir?");
    alert(msg)
</script>