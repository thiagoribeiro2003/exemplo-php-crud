<?php
require_once "../src/funcoes-produtos.php";
$listaDeProdutos = lerProdutos($conexao); //dump($listaDeProdutos);
?>

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

        <?php 
            foreach ($listaDeProdutos as $produtos){        
        ?>
        
        <div class="produtos">
            <article>
                <h3><?=$produtos["produto"]?></h3> <!-- Nome -->
                <p><b>Preço:</b> R$<?=number_format($produtos["preco"],2, ",", ".")?></p> <!-- Preço -->
                <p><b>Qtd. em estoque:</b> <?=$produtos["quantidade"]?></p> <!-- Quantidade -->
                <p><b>Descrição:</b> <?=$produtos["descricao"]?></p> <!-- Descrição -->
                <p><b>fabricante:</b> <?=$produtos["fabricante"]?></p> <!-- Fabricante -->

                <!-- Atualizar -->
                <a href="atualizar.php?id=<?=$produtos["id"]?>">Atualizar</a>
                <!-- Excluir -->
               <a href="excluir.php?id="<?=$produtos["id"]?>>Excluir</a>
            </article>
        </div>







        <?php 
            }
        ?>



        <p><a href="../index.php">Home</a></p>
    </div>    
</body>
</html>