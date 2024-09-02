<?php


class Entrada{
    private $codigo;
    private $dataEntrada;
    private $horaEntrada;
    private $dataSaida;
    private $horaSaida;
    private $cliente;
    private $veiculo;
    private $estacionamento;
    private $valorTotal;

    public function __construct($cliente, $veiculo, $estacionamento) {
        $this->codigo = $codigo(); 
        $this->dataEntrada = $dataEntrada;
        $this->horaEntrada = $dataEntrada;
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->estacionamento = $estacionamento;
    }

    public function getcodigo() {
        return $this->codigo;
    }

    public function getDataEntrada() {
        return $this->dataEntrada;
    }

    public function getHoraEntrada() {
        return $this->horaEntrada;
    }

    public function getDataSaida() {
        return $this->dataSaida;
    }

    public function getHoraSaida() {
        return $this->horaSaida;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getVeiculo() {
        return $this->veiculo;
    }

    public function getEstacionamento() {
        return $this->estacionamento;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }// FIM DO SET/GET

    public function Entrada() {
        $nota = "Nota de Entrada\n";
        $nota .= "Código: " . $this->codigo . "\n";
        $nota .= "Cliente: " . $this->cliente->getNome() . "\n";
        $nota .= "Veículo: " . $this->veiculo->getMarca() . " " . $this->veiculo->getModelo() . "\n";
        $nota .= "Data de Entrada: " . $this->dataEntrada . "\n";
        $nota .= "Hora de Entrada: " . $this->horaEntrada . "\n";
        $nota .= "Estacionamento: " . $this->estacionamento->getNome() . "\n";
    }// FIM DO IMPRIMIR
}// FIM DA CLASS