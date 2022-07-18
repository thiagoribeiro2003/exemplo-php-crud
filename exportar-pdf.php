<?php
// exportar-pdf.php
use CrudDiversos\Utilitarios;
use Dompdf\Dompdf;
use Dompdf\Options;

require_once "vendor/autoload.php";

session_start(); // inicialização a session
// Utilitarios::teste($_SESSION['dados']);


$paragrafo = "";
foreach($_SESSION['dados'] as $fabricante){
    //operador .= de concatenação e atribuição
     $paragrafo .= "<p>". $fabricante['nome'] ."</p>";
}

// Conteúdo HTML para o resumo usando a sintaxe heredoc PHP
$data = date("d/m/Y");
$conteudo = <<<HTML
    <div style="border: solid 2px; padding: 10px; width: 70%; margin:auto; text-align: center">
        <h2>Resumo de Fabricantes - $data</h2>
        $paragrafo
    </div>
HTML;

// Essa sintaxe funcona
$options = new Options();
$options->set('defaultFont', 'Verdana');
$dompdf = new Dompdf();

// Essa sintaxe não funciona 
// $options = $dompdf->getOptions();
// $options->setDefaultFont('Courier');
// $dompdf->setOptions($options);

$dompdf = new Dompdf(); // Objeto
$dompdf->loadHtml($conteudo);  // Método
$dompdf->setPaper('A4', 'landscape'); 
$dompdf->render();
$dompdf->stream("Resumo de Fabricantes -".date("d-m-Y")."pdf");