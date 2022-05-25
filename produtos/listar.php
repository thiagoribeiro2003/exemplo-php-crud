<?php
require_once "../src/funcoes-produtos.php";
$listaDeProdutos = lerProdutos($conexao); dump($listaDeProdutos);

?>
<pre><?=var_dump($listaDeProdutos)?></pre>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Lista</title>
</head>
<body>
    <div class="container">
        <h1>Produtos | SELECT <a href="../index.php">(HOME)</a></h1>
        <hr>
        <h2>Lendo e carregando todos os produtos</h2>
        <p><a href="inserir.php">Inserir um novo produto</a></p>
        <div class="produtos">

            <article>
                <h3>Nome do produto...</h3>
                <p>Preço...</p>
                <p>Quantidade...</p>
                <p>Descrição...</p>
                <p>Fabricante...</p>
            </article>
        </div>


        <p><a href="../index.php">Home</a></p>
    </div>
       
        
     
</body>
</html>