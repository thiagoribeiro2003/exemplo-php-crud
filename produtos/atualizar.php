<?php
require_once '../src/funcoes-fabricantes.php';
require_once '../src/funcoes-produtos.php';
$listaDeFabricantes = lerFabricantes($conexao);

// Pegando o valor do id e sanitizando por segurança
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Chamando a função e recebendo os dados do produto
$produto = lerUmProduto($conexao, $id);

dump($produto);

if(isset($_POST['atualizar'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    atualizarProdutos($conexao, $id, $nome);


    header("location:listar.php?status=sucesso");
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
                <input value="<?=$produto['nome']?>" type="text" name="nome" id="nome" required>
            </p>

            <p>
                <label for="preco">Preço:</label>
                <input value="<?=$produto['preco']?>" type="number" name="preco" id="preco" min="0" max="10000" step="0.01" required>
            </p>
            
            <p>
                <label for="quantidade">Quantidade:</label>
                <input value="<?=$produto['quantidade']?>" type="number" name="quantidade" id="quantidade" min="0" max="100" required>
            </p>

            <p>
                <label for="fabricante">Fabricante:</label>
                <select required name="fabricante" id="fabricante">
                <?php foreach($listaDeFabricantes as $fabricante) {?>
                    <option selected value="<?=$fabricante['id']?>"><?=$fabricante['nome']?></option>
                    
                    <?php } ?>
                    <!-- O value id é para o banco-->
                    <option value="<?=$fabricante['id']?>"> 
                                   <?=$fabricante['nome']?> <!--exibição -->
                    </option> 

                   

                    <!-- Opções de fabricantes existentes no BANCO -->
                </select>
            </p>
            
            <p>
               <p> <label for="descricao">Descrição:</label> </p>
                <textarea name="descricao" id="descricao" cols="30" rows="3"><?=$produto['descricao']?></textarea>
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