<?php 

class Calculadora 
{
    #atributo
    public $operacao;

    #metodo
    public function __construct($operacao)
    {
        $this-> operacao = $operacao;
    }

    public function acao()
    {
        $this->operacao->calculo();
        echo "resultado " . $this->operacao->resultado;
    }


}