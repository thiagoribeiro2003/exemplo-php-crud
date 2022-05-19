<?php require_once "../src/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Lista</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT</h1>
        <hr>
        <h2>Lendo e carregando todos os Fabricantes</h2>
        
        <p><a href="inserir.php">Voltar para lista de fabricantes</a></p>

        <p><a href="../index.php">Home</a></p>

        <table>
            <caption>Lista de Fabricantes</caption>
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th colspan="2">Operações</th>
            </tr>
            </thead>
        
        <tbody>
<?php 
    // string com o comando SQL
    

    // preparação do comando
    

    // execução do comando
    

    //capturar os resultados
   

    //echo "<pre>";
    //var_dump($resultado); //teste
    //echo "</pre>";

    foreach ($listaDeFabricantes as $fabricante){
    ?>
 
<tr>
    <td> <?=$fabricante["id"] ?> </td>
    <td> <?=$fabricante["nome"]?> </td>
    <td> <a href="atualizar.php?id=<?=$fabricante["id"]?>">Atualizar</a> </td>
    <td> <a href="">Excluir</a> </td>
</tr>

 <?php 
        }
     ?>
       
    </tbody>
    </table>
    </div>
</body>
</html>