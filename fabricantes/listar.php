<?php 
/* SCRIPT DE CONEXÃO AO SERVIDOR BANCO DE DADOS */

// Parâmetros
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";


try { /*try = testar*/
        // Criando a conexão com o MySQL (API/Driver de conexão)
        $conexao = new PDO(
        "mysql:host=$servidor; dbname=$banco; charset=utf8",
        $usuario,
        $senha
    );

    // Habilita a verificação de erros
$conexao->setAttribute(
    PDO::ATTR_ERRMODE, // constante de erros em geral
    PDO::ERRMODE_EXCEPTION // constantes de exceções de erros
    );
}catch(Exception $erro){ /*catch = capturar*/
    die("Erro: ".$erro->getMessage());
}


// Criando a conexão com o MySQL (API/Driver de conexão)
$conexao  = new PDO(
    "mysql:host=$servidor; dbname=$banco; charset=utf8",
    $usuario,
    $senha
);

// Habilita a verificação de erros
$conexao->setAttribute(
    PDO::ATTR_ERRMODE, // constante de erros em geral
    PDO::ERRMODE_EXCEPTION // constantes de exceções de erros
);

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
        </table>
        <tbody>
<?php 
    // string com o comando SQL
    $sql = "SELECT id,nome FROM fabricantes";

    // preparação do comando
    $consulta = $conexao->prepare($sql);

    // execução do comando
    $consulta->execute();

    //capturar os resultados
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    //echo "<pre>";
    //var_dump($resultado); //teste
    //echo "</pre>";

    foreach ($resultado as $fabricante){
       $fabricante['nome'];    
    }
?>

<tr>
    <td><?php echo $fabricante['id'] ;?></td>
    <td><?php echo $fabricante ['nome'];?></td>
</tr>


        </tbody>
    </div>
</body>
</html>