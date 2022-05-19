<?php
require_once '../src/funcoes-fabricantes.php';
// Obtendo o valor do parâmetro da URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$fabricante = lerUmFabricante($conexao, $id);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Atualizar</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT/UPDATE</h1>
        <hr>

        <form action="" method="post">
            <input type="hidden" name="">
            <p>
                <label for="nome">Nome:</label>
                <input value="<?=$fabricante['nome']?>" type="text" name="nome" id="nome">
            </p>

            <button type="submit" name="atualizar">
             Atualizar fabricante
            </button>

        </form>
    </div>

    <p><a href="inserir.php">Voltar para lista de fabricantes</a></p>

        <p><a href="../index.php">Home</a></p>

</body>
</html>