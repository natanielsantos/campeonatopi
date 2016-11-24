<?php

class Arbitros {

    private $nome;
    private $idade;
    private $rg;
    private $cidade;
    private $estado;

    function __construct() {
        
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {   
        return $this->idade;
    }

    function getRg() {
        return $this->rg;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
    
    function teste2 (){
        
    }
}
