<?php
use CrudPoo\Fabricante;
require_once "../vendor/autoload.php";
$fabricante = new Fabricante;
$fabricante->setId($_GET['id']);
$fabricante->excluirFabricante();
header("location:listar.php");
?>
