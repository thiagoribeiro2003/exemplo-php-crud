<?php
use CrudPoo\Fabricante;
require_once '../vendor/autoload.php';
$fabricante = new Fabricante;

$fabricante->setId( $_GET['id'] );

$dadosFabricante = $fabricante->lerUmFabricante();

if(isset($_POST['atualizar'])) {
    $fabricante->setNome( $_POST['nome'] );
    $fabricante->atualizarFabricantes();
   header("location:listar.php?status=sucesso");
}
?>



<!-- 
    Apple
    Positivo
-->
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
        <h1>Fabricantes | SELECT/UPDATE <a href="../index.php">(HOME)</a></h1>
        <hr>

        <form action="" method="post" name="<?=$dadosFabricante['id']?>">
            <input type="hidden" name="">
            <p>
                <label for="nome">Nome:</label>
                <input value="<?=$dadosFabricante['nome']?>" type="text" name="nome" id="nome">
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