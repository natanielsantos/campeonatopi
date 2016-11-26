<?php

class ProfissionaisMySqlDAO implements ProfissionaisDAO {

    public function load($id) {
        $sql = 'SELECT * FROM Profissionais WHERE idProfissionais = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM Profissionais';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM Profissionais ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function delete($idProfissionais) {
        $sql = 'DELETE FROM Profissionais WHERE idProfissionais = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idProfissionais);
        return $this->executeUpdate($sqlQuery);
    }

    public function insert($profissionai) {
        $sql = 'INSERT INTO Profissionais (nome, dataNascimento, rg, posicao, time, salario, habilidade) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($profissionai->nome);
        $sqlQuery->set($profissionai->dataNascimento);
        $sqlQuery->set($profissionai->rg);
        $sqlQuery->set($profissionai->posicao);
        $sqlQuery->setNumber($profissionai->time);
        $sqlQuery->set($profissionai->salario);
        $sqlQuery->set($profissionai->habilidade);

        $id = $this->executeInsert($sqlQuery);
        $profissionai->idProfissionais = $id;
        return $id;
    }

    public function update($profissionai) {
        $sql = 'UPDATE Profissionais SET nome = ?, dataNascimento = ?, rg = ?, posicao = ?, time = ?, salario = ?, habilidade = ? WHERE idProfissionais = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($profissionai->nome);
        $sqlQuery->set($profissionai->dataNascimento);
        $sqlQuery->set($profissionai->rg);
        $sqlQuery->set($profissionai->posicao);
        $sqlQuery->setNumber($profissionai->time);
        $sqlQuery->set($profissionai->salario);
        $sqlQuery->set($profissionai->habilidade);

        $sqlQuery->setNumber($profissionai->idProfissionais);
        return $this->executeUpdate($sqlQuery);
    }

    public function clean() {
        $sql = 'DELETE FROM Profissionais';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByNome($value) {
        $sql = 'SELECT * FROM Profissionais WHERE nome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDataNascimento($value) {
        $sql = 'SELECT * FROM Profissionais WHERE dataNascimento = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByRg($value) {
        $sql = 'SELECT * FROM Profissionais WHERE rg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPosicao($value) {
        $sql = 'SELECT * FROM Profissionais WHERE posicao = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByTime($value) {
        $sql = 'SELECT * FROM Profissionais WHERE time = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryBySalario($value) {
        $sql = 'SELECT * FROM Profissionais WHERE salario = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByHabilidade($value) {
        $sql = 'SELECT * FROM Profissionais WHERE habilidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByNome($value) {
        $sql = 'DELETE FROM Profissionais WHERE nome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDataNascimento($value) {
        $sql = 'DELETE FROM Profissionais WHERE dataNascimento = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByRg($value) {
        $sql = 'DELETE FROM Profissionais WHERE rg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPosicao($value) {
        $sql = 'DELETE FROM Profissionais WHERE posicao = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByTime($value) {
        $sql = 'DELETE FROM Profissionais WHERE time = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteBySalario($value) {
        $sql = 'DELETE FROM Profissionais WHERE salario = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByHabilidade($value) {
        $sql = 'DELETE FROM Profissionais WHERE habilidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    protected function readRow($row) {
        $profissionai = new Profissionai();

        $profissionai->idProfissionais = $row['idProfissionais'];
        $profissionai->nome = $row['nome'];
        $profissionai->dataNascimento = $row['dataNascimento'];
        $profissionai->rg = $row['rg'];
        $profissionai->posicao = $row['posicao'];
        $profissionai->time = $row['time'];
        $profissionai->salario = $row['salario'];
        $profissionai->habilidade = $row['habilidade'];

        return $profissionai;
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}

?>