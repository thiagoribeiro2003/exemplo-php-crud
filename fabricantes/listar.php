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

        <table>
            <caption>Lista de Fabricantes</caption>
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
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
</tr>

 <?php 
        }
     ?>
       
    </tbody>
    </table>
    </div>
</body>
</html>