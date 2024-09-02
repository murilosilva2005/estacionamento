<?php
// Classe Funcionario
class Funcionario {
    private $nome;
    private $dataNascimento;
    private $telefone;
    private $endereco;
    private $salario;
    private $cargo;

    public function __construct($nome, $dataNascimento, $telefone, $endereco, $salario, $cargo) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    // Getters e setters
    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }
    public function getDataNascimento() { return $this->dataNascimento; }
    public function setDataNascimento($dataNascimento) { $this->dataNascimento = $dataNascimento; }
    public function getTelefone() { return $this->telefone; }
    public function setTelefone($telefone) { $this->telefone = $telefone; }
    public function getEndereco() { return $this->endereco; }
    public function setEndereco($endereco) { $this->endereco = $endereco; }
    public function getSalario() { return $this->salario; }
    public function setSalario($salario) { $this->salario = $salario; }
    public function getCargo() { return $this->cargo; }
    public function setCargo($cargo) { $this->cargo = $cargo; }
}

// Classe Gerente
class Gerente extends Funcionario {
    private $funcionarios;

    public function __construct($nome, $dataNascimento, $telefone, $endereco, $salario, $cargo) {
        parent::__construct($nome, $dataNascimento, $telefone, $endereco, $salario, $cargo);
        $this->funcionarios = array(); //guarda os números e strings e etc
    }

    public function cadastrarFuncionario(Funcionario $funcionario) {
        $this->funcionarios[] = $funcionario;
    }

    public function imprimirRelatorio() {
        echo "Relatório de Funcionários:\n";
        echo "Nome: " . $this->funcionarios[0]->getNome() . "\n";
        echo "Data de Nascimento: " . $this->funcionarios[0]->getDataNascimento() . "\n";
        echo "Telefone: " . $this->funcionarios[0]->getTelefone() . "\n";
        echo "Endereço: " . $this->funcionarios[0]->getEndereco() . "\n";
        echo "Salário: R$ " . number_format($this->funcionarios->getSalario(), 2, ',', '.') . "\n";
        echo "Cargo: " . $this->funcionarios[0]->getCargo() . "\n\n";
    }
}