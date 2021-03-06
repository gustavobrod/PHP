<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct($cpf, $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;        
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    
    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo "Nome precisar ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
    }
}