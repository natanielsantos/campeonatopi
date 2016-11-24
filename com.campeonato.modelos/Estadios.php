<?php


class Estadios {
    private $nome;
    private $apelido;
    private $cidade;
    private $estado;
    private $capacidade;
    
    function __construct() {
        
    }
    
    function getNome() {
        return $this->nome;
    }

    function getApelido() {
        return $this->apelido;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCapacidade() {
        return $this->capacidade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setApelido($apelido) {
        $this->apelido = $apelido;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCapacidade($capacidade) {
        $this->capacidade = $capacidade;
    }



}
