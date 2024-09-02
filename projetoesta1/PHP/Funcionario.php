<?php

    //declarei o projeto
    namespace Projeto\ProjetoEsta1\PHP;

     //fiz a conexão
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
    //COMEÇO DO SET/GET
    function getCodigo() {
        return $this->codigo;
    }

     function getNome() {
        return $this->nome;
    }

     function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

     function getSalario() {
        return $this->salario;
    }

     function getCargo() {
        return $this->cargo;
    }// FIM DO SET/GET

    function  Funcionario() {
        $nota .="Código:"   .$this->codigo. ",";
        $nota .="Nome:"      .$this->nome. ",";
        $nota .="Telefone:" .$this->telefone. ",";
        $nota .="Endereco:" .$this->endereco. ",";
        $nota .="Salario:"  .$this->salario.",";
        $nota .="DataNascimento:" .$this->dataNascimento.",";
        $nota .="Cargo:" .$this->Cargo.",";
    }//FIM DO IMPRIMIR 
// fim da class
?>



