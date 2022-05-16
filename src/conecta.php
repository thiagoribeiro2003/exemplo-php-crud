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