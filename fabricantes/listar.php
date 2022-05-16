<?php 
/* SCRIPT DE CONEXÃO AO SERVIDOR BANCO DE DADOS */

// Parâmetros
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";

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

        </tbody>
    </div>
</body>
</html>