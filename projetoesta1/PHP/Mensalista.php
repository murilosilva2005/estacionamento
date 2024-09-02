<?php

//declarei o projeto
namespace Projeto\ProjetoEsta1\PHP;

//fiz a conexão
use Projeto\ProjetoEsta1\PHP\Mensalista;

class Mensalista {
    private $nome;
    private $telefone;
    private $endereco;
 private $carro;
    private $placa;
    private $cor;
    private $dataPagamento;
    private $valorMensal;

    public function __construct($nome, $telefone, $endereco, $carro, $placa, $cor, $dataPagamento, $valorMensal) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->carro = $carro;
        $this->placa = $placa;
        $this->cor = $cor;
        $this->dataPagamento = $dataPagamento;
        $this->valorMensal = $valorMensal;
    }// COMEÇO DO GET/SET

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCarro() {
        return $this->carro;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getDataPagamento() {
        return $this->dataPagamento;
    }

    public function getValorMensal() {
        return $this->valorMensal;
    }
    //ECHO/IMPRIMIR
    public function Mensalista() {
        $nota .= "Nome: " . $this->nome . "\n";
        $nota .= "Telefone: " . $this->telefone . "\n";
        $nota .= "Endereço: " . $this->endereco . "\n";
        $nota .= "Carro: " . $this->carro . "\n";
        $nota .= "Placa: " . $this->placa . "\n";
        $nota .= "Cor: " . $this->cor . "\n";
        $nota .= "Data de Pagamento: " . $this->dataPagamento . "\n";
        $nota .= "Valor Mensal: R$ " .$this->valorMensal . "\n";
        return $nota;
    }// FIM DO IMPRIMIR
}//fim da classe
