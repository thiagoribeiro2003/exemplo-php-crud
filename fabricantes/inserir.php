<?php 
/* Verificando se o botão formulário foi acionado */
if(isset($_POST['inserir']) ){
/* Importando as funções e a conexão */ 
require_once "../src/funcoes-fabricantes.php";

/* Capturando o que foi digitado no camop nome */ 
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

/* Chamando a função e passando os dados de conexão e o nome digitado */
inserirFabricante($conexao, $nome);

// Redirecionamento
header("location:listar.php");
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Inserir</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | INSERT</h1>
        <hr>

        <form action="" method="post">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </p>
            <button type="submit" name="inserir">
                Inserir fabricante
            </button>
        </form>
    </div>

    <p><a href="inserir.php">Voltar para lista de fabricantes</a></p>

        <p><a href="../index.php">Home</a></p>

</body>
</html>