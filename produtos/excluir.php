<?php
require_once '../vendor/autoload.php';
use CrudPoo\Produto;

$produto = new Produto;
$produto->setId($_GET['id']);

$produto->excluirProduto();
header("location:listar.php");
