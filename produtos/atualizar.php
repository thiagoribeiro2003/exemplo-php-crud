<?php
use CrudPoo\Fabricante;
use CrudPoo\Produto;

require_once '../vendor/autoload.php';

$fabricante = new Fabricante;
$produto = new Produto;

$produto->setId($_GET['id']);

$dadosProduto = $produto->lerUmProduto();


if(isset($_POST['atualizar'])){
    $produto->setNome($_POST['nome']);
    $produto->setPreco($_POST['preco']);
    $produto->setQuantidade($_POST['quantidade']); 
    $produto->setDescricao($_POST['descricao']);  
    $produto->setFabricanteId($_POST['fabricante']);
    
    atualizarProduto($conexao, $id, $nome, $preco, $quantidade, $descricao, $fabricanteId);

    header("location:listar.php");
}
?>



<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Atualizar</title>
    
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Produtos | SELECT/UPDATE</h1>
        <hr>

        <form action="" method="post">
            <p>
                <label for="nome">Nome:</label>
                <input value="<?=$dadosProduto['nome']?>" type="text" name="nome" id="nome" required>
            </p>

            <p>
                <label for="preco">Preço:</label>
                <input value="<?=$dadosProduto['preco']?>" type="number" name="preco" id="preco" min="0" max="10000" step="0.01" required>
            </p>
            
            <p>
                <label for="quantidade">Quantidade:</label>
                <input value="<?=$dadosProduto['quantidade']?>" type="number" name="quantidade" id="quantidade" min="0" max="100" required>
            </p>

            <p>
                <label for="fabricante">Fabricante:</label>
                <select required name="fabricante" id="fabricante">
                <?php foreach($listaDeFabricantes as $fabricante) {?>
                    <!-- O value id é para o banco-->
                    <option <?php 
                    /* Se chave estrangeira for idêntica à chave primária (ou seja, se o código do fabricante do produto bater com ocódigo do fabricante), então coloque o atributo selected no option */
                    if($dadosProduto['fabricante_id'] === $fabricante['id']) echo " selected "; ?> 
                    value="<?=$fabricante['id']?>"> 
                         <?=$fabricante['nome']?> <!--exibição -->
                    </option> 

                    <?php } 
                    
                    
                    ?>

                   

                    <!-- Opções de fabricantes existentes no BANCO -->
                </select>
            </p>
            
            <p>
               <p> <label for="descricao">Descrição:</label> </p>
                <textarea name="descricao" id="descricao" cols="30" rows="3"><?=$dadosProduto['descricao']?></textarea>
            </p>

            <button type="submit" name="atualizar">
               Atualizar Produtos
            </button>
        </form>
    </div>



    <p><a href="listar.php">Voltar para lista de produtos</a></p>
    <p><a href="../index.php">Home</a></p>
</body>
</html>