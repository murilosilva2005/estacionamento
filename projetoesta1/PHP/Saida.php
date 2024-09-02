<?php

    //declarei o projeto
    namespace Projeto\ProjetoEsta1\PHP;

     //fiz a conexão
     use Projeto\ProjetoEsta1\PHP\Saida;

 function registrarSaida($codigo, $valorTotal) {
        if ($codigo == $this->codigo) {
            $this->dataEntrada = $horaEntrada;
            $this->horaSaida = $horaSaida;
            $this->valorTotal = $valorTotal;
            return true;
        } else {
            return false;
        }
    }


class Saida{
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Veiculo {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }
}

class Estacionamento {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}    function saida() {
    $nota .="codigo:" .$this->codigo.",";
    $nota .="valorTotal:" .$this->valorTotal.",";
    $nota .="dataEntrada:" .$this->dataEntrada.",";
    $nota .="horaSaida:" .$this->horaSaida.",";
    $nota .="nome:" .$this->nome.",";
    $nota .="Marca" .$this->Marca.",";
    $nota .="Modelo" .$this->Modelo.",";

    
}





?>





