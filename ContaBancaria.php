<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Conta
 *
 * @author Sammy
 */
class ContaBancaria 
{
    
    protected $tipo;
    public $numero;
    private $nome;
    private $saldo;
    private $status;
       
    //get e set
    public function getTipo() 
    {
        return $this->tipo;
    }

    public function getNumero() 
    {
        return $this->numero;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function getSaldo() 
    {
        return $this->saldo;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function setTipo($tipo): void 
    {
        $this->tipo = $tipo;
    }

    public function setNumero($numero): void 
    {
        $this->numero = $numero;
    }

    public function setNome($nome): void 
    {
        $this->nome = $nome;
    }

    public function setSaldo($saldo): void 
    {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void 
    {
        $this->status = $status;
    }

    //fim get e set;
    
    //construtor
    
    public function __construct() 
    {
        $this->setSaldo(0);
        $this->setStatus(false);
    }
    
    //fimconstrutor

    //Metodos
    public function abrirConta($Numero, $Nome, $Tipo) 
    {
        $this -> numero = $Numero;
        $this -> nome = $Nome;
        $this -> tipo = $Tipo;
        $this -> setStatus(true);
        
        if($Tipo == "CP")
        {
            $this -> setSaldo(150);
        }
        else if($Tipo == "CC")
        {
            $this -> setSaldo(50);
        }
        else
        {
            echo "<br/><h2>ERRO, O TIPO DE CONTAR INFORMADO NÃO EXISTE, REINICIE E TENTE NOVAMENTE!</h2><br/>";
        }
    }
    
    public function depositar($valor)
    {
        if($this -> getSaldo(true))
        {
            $this -> setSaldo($this -> getSaldo() + $valor);
        }
        else
        {
            echo "<br/><h1>Esta conta não existe ou está fechada. </br> Tente novamente com outra conta!</h1><br/>";
        }
    }
    
    public function sacar($valor) 
    {   
        
        if ($this -> saldo >= $valor)
        {
            $this -> setSaldo($this -> getSaldo() - $valor);
        }
        else
        {
            echo "<br/><h1>Saldo insuficiente para saque.</h1><br/>";
        }
    }
    
    public function fecharConta()
    {
        if($this ->getSaldo()>0)
        {
            echo "<h2>Não é possível encerrar uma conta com saldo, porfavor efetue o saque dos valores antes de encerrar a conta.</h2>";
        }
        else if($this ->getSaldo()<0)
        {
            echo "<h2>A conta possuí saldo devedor, efetue deposito equivalente para quitar antes de encerrar da conta.</h2>";
        }
        else
        {
            $this->setStatus(false);
        }
        
    }
    
    public function taxaMensal() 
    {
        if($this->getTipo() == "CC")
        {
            $v = 12;
        }
        else if($this->getTipo() == "CP")
        {
            $v = 20;
        }
        
        if($this->getStatus())
        {
            $this->setSaldo($this->getSaldo() - $v);
        }
        else 
        {
            echo "<p>Erro, a conta não está ativa.</p>";
        }
    }
    
}
