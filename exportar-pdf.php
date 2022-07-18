<?php
// exportar-pdf.php
use CrudDiversos\Utilitarios;

require_once "vendor/autoload.php";

session_start(); // inicialização a session
// Utilitarios::teste($_SESSION['dados']);

foreach($_SESSION['dados'] as $fabricante){
    echo $fabricante['nome'] ."<br>";
}

echo "Script de exportação em PDF";