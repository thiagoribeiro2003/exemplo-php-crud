<?php
namespace CrudPoo;
use PDO;
class Fabricante
{
    private int $id;
    private string $nome;

    /* Esta propriedade receberá os recursos PDO através da classe Banco (dependência do projeto) */
    private PDO $conexao;

    public function __construct()
    {
        /* No momento em que for criado um objeto a partir 
        da classe fabricante, automaticamente será feita a conexão com o banco. */ 
        $this->conexao = Banco::conecta();
    }







    // getters e setters de $id 
    public function getId(): int
    {
        return $this->id;
    }

    
    public function setId(int $id)
    {
        $this->id = $id;

       
    }


    //getters e setters de $nome
    public function getNome(): string
    {
        return $this->nome;
    }

    
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
}