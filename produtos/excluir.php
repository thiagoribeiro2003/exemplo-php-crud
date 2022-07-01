<?php
require_once '../vendor/autoload.php';

use CrudPoo\Produto;
$produto = new Produto;

$produto->setId($_GET['id']);
$excluir = $produto->excluirProduto($conexao, $id);

header("location:listar.php");
