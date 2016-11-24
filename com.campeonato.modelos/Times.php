<?php


class Times {
    private $nome;
    private $sigla;
    private $cidade;
    private $estado;
    private $cor;
    private $estadio;
    private $patrimonio;
    private $ano;
    
    function __construct() {
        
    }
    
    function getNome() {
        return $this->nome;
    }

    function getSigla() {
        return $this->sigla;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCor() {
        return $this->cor;
    }

    function getEstadio() {
        return $this->estadio;
    }

    function getPatrimonio() {
        return $this->patrimonio;
    }

    function getAno() {
        return $this->ano;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setEstadio($estadio) {
        $this->estadio = $estadio;
    }

    function setPatrimonio($patrimonio) {
        $this->patrimonio = $patrimonio;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }



}
