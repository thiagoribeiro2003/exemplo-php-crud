<?php
require_once '../src/funcoes-fabricantes.php';
$listaDeFabricantes = lerFabricantes($conexao);

if(isset($_POST['inserir'])){
    require_once '../src/funcoes-produtos.php';
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);  
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);  
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);  
    $fabricanteId = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_NUMBER_INT); 
    
    inserirProduto($conexao, $nome, $preco, $quantidade, $descricao, $fabricanteId);

    header("location:listar.php");
}
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Inserir</title>
</head>
<body>
    <div class="container">
        <h1>Produtos | INSERT</h1>
        <hr>

        <form action="" method="post">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </p>

            <p>
                <label for="preco">Preço:</label>
                <input type="number" name="preco" id="preco" min="0" max="10000" step="0.01" required>
            </p>
            
            <p>
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" min="0" max="100" required>
            </p>

            <p>
                <label for="fabricante">Fabricante:</label>
                <select required name="fabricante" id="fabricante">
                    <option value=""></option>
                    
                    <?php foreach($listaDeFabricantes as $fabricante) {?>
                    <!-- O value id é para o banco-->
                    <option value="<?=$fabricante['id']?>"> 
                                   <?=$fabricante['nome']?> <!--exibição -->
                    </option> 

                    <?php } ?>

                    <!-- Opções de fabricantes existentes no BANCO -->
                </select>
            </p>
            
            <p>
               <p> <label for="descricao">Descrição</label> </p>
                <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
            </p>

            <button type="submit" name="inserir">
                Inserir Produtos
            </button>
        </form>
    </div>



    <p><a href="listar.php">Voltar para lista de produtos</a></p>
    <p><a href="../index.php">Home</a></p>
</body>
</html>