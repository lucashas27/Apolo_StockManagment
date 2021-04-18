<?php

class Cliente { 
    private $nome;
    private $idade;
    private $sexo;
    private $endereco;
    private $cpf;
    public static $CriadoEm;
    public static int $numeroDeContas;


    public function __construct($nome, $idade, $sexo, $endereco, $cpf)
    {
        $this->nome = $nome;
        $idade = $this->validaIdade($idade);
        $this->sexo = $sexo;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
        self::$CriadoEm = date('d/m/Y H:i');
    }


    public function validaIdade($idade)
    {
        if ($idade < 5 && $idade > 110) {
            return 'Idade incorrenta!';
        }
        
        $this->idade = $idade;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }
    

}