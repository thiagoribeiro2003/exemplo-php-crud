<?php 
namespace CrudPoo;

/*Indicamos o uso das classes nativas do PHP (ou seja,
Classes que não fazem parte do nosso namespace) */

use PDO, Exception;

abstract class Banco 
{
/* Propriedades/atributos 
de acesso ao servidor de Banco de Dados */ 

private static string $servidor = "localhost";
private static string $usuario = "root";
private static string $senha = "";
private static string $banco = "vendas";
private static PDO $conexao; // precisa do use PDO 
/*private static \PDO $conexao; // se for fazer com \ não precisa deo use PDO*/


/* Método de conexão ao banco */ 
public static function conecta():PDO{
    try {
        self::$conexao = new PDO(
            "mysql:host=".self::$servidor.";
            dbname=".self::$banco."; 
            charset=utf8",
            self::$usuario, //Self permite acessar recursos estáticos da própria classe
            self::$senha   //dentro da classe é o self::$variavel que da acesso  
        );
        self::$conexao->setAttribute(
        PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION 
        );
        //echo "ok";
    } catch (Exception $erro) {
        die("Deu ruim: ".$erro->getMessage());
    }
    return self::$conexao;
}

}
//Banco::conecta();

?>