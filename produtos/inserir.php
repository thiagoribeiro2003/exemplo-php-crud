<?php

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
                    
                    <?php ?>

                    <option value="id"><?=$produtos["fabricante"]?></option>

                    <?php  ?>

                    <!-- Opções de fabricantes existentes no BANCO -->
                </select>
            </p>
            
            <p>
                <label for="descricao">Descrição</label>
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