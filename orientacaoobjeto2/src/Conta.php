<?php

class Conta 
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;

    public function saca(float $valorASacar)
    {
       if ($valorASacar > $this->saldo) {
        echo "Saldo insuficiente!";
       } else {
        $this->saldo -= $valorASacar;
        
       }
    }

    public function deposita(float $ValorADepositar):void
    {
        if ($ValorADepositar <= 0) {
            echo " Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $ValorADepositar;
    } 

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente para transferencia";
            return;
        } 
        
        $this->saca($valorATransferir);
           $contaDestino->deposita($valorATransferir); 
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

}

