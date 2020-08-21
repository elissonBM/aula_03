<?php 

#classe Operacao

class Operacao
{   
    public $num1;
    public $num2;
    public $resultado;
    public $tipo;

    public function __construct($tipo,$num1,$num2)
    {
        $this-> tipo = $tipo;
        $this-> num2 = $num2;
        $this-> num1 = $num1;
    }
    
    

        public function calculo()
        {
            switch ($this->tipo)
            {
                case 'soma':
                    $this->soma();
                    break;
                case 'subtracao':
                    $this->subtracao();
                    break;
                default:
                    echo('tipo invalido ');
                break;
            }    

        }
 

    public function soma()
    {
        $this ->resultado = $this ->num1 + $this->num2;
    }
    public function subtracao()
    {
        $this ->resultado = $this ->num1 - $this->num2;
    }
    
}







































