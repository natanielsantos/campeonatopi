<?php

class Profissionais {

    private $idProfissionais;
    private $nome;
    private $dataNascimento;
    private $rg;
    private $posicao;
    private $time;
    private $salario;
    private $habilidade;

    public function Profissionais() {
        
    }

    function getIdProfissionais() {
        return $this->idProfissionais;
    }

    function getNome() {
        return $this->nome;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getRg() {
        return $this->rg;
    }

    function getPosicao() {
        return $this->posicao;
    }

    function getTime() {
        return $this->time;
    }

    function getSalario() {
        return $this->salario;
    }

    function getHabilidade() {
        return $this->habilidade;
    }

    function setIdProfissionais($idProfissionais) {
        $this->idProfissionais = $idProfissionais;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setHabilidade($habilidade) {
        $this->habilidade = $habilidade;
    }

}
