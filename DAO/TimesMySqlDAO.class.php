<?php

class TimesMySqlDAO implements TimesDAO {

    public function load($id) {
        $sql = 'SELECT * FROM Times WHERE idTimes = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM Times';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM Times ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function delete($idTimes) {
        $sql = 'DELETE FROM Times WHERE idTimes = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idTimes);
        return $this->executeUpdate($sqlQuery);
    }

    public function insert($time) {
        $sql = 'INSERT INTO Times (nome, sigla, cidade, estado, cor, estadio, patrimonio, ano) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($time->nome);
        $sqlQuery->set($time->sigla);
        $sqlQuery->set($time->cidade);
        $sqlQuery->set($time->estado);
        $sqlQuery->set($time->cor);
        $sqlQuery->set($time->estadio);
        $sqlQuery->set($time->patrimonio);
        $sqlQuery->set($time->ano);

        $id = $this->executeInsert($sqlQuery);
        $time->idTimes = $id;
        return $id;
    }

    public function update($time) {
        $sql = 'UPDATE Times SET nome = ?, sigla = ?, cidade = ?, estado = ?, cor = ?, estadio = ?, patrimonio = ?, ano = ? WHERE idTimes = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($time->nome);
        $sqlQuery->set($time->sigla);
        $sqlQuery->set($time->cidade);
        $sqlQuery->set($time->estado);
        $sqlQuery->set($time->cor);
        $sqlQuery->set($time->estadio);
        $sqlQuery->set($time->patrimonio);
        $sqlQuery->set($time->ano);

        $sqlQuery->setNumber($time->idTimes);
        return $this->executeUpdate($sqlQuery);
    }

    public function clean() {
        $sql = 'DELETE FROM Times';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByNome($value) {
        $sql = 'SELECT * FROM Times WHERE nome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryBySigla($value) {
        $sql = 'SELECT * FROM Times WHERE sigla = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCidade($value) {
        $sql = 'SELECT * FROM Times WHERE cidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEstado($value) {
        $sql = 'SELECT * FROM Times WHERE estado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCor($value) {
        $sql = 'SELECT * FROM Times WHERE cor = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEstadio($value) {
        $sql = 'SELECT * FROM Times WHERE estadio = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPatrimonio($value) {
        $sql = 'SELECT * FROM Times WHERE patrimonio = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByAno($value) {
        $sql = 'SELECT * FROM Times WHERE ano = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByNome($value) {
        $sql = 'DELETE FROM Times WHERE nome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteBySigla($value) {
        $sql = 'DELETE FROM Times WHERE sigla = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCidade($value) {
        $sql = 'DELETE FROM Times WHERE cidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEstado($value) {
        $sql = 'DELETE FROM Times WHERE estado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCor($value) {
        $sql = 'DELETE FROM Times WHERE cor = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEstadio($value) {
        $sql = 'DELETE FROM Times WHERE estadio = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPatrimonio($value) {
        $sql = 'DELETE FROM Times WHERE patrimonio = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByAno($value) {
        $sql = 'DELETE FROM Times WHERE ano = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    protected function readRow($row) {
        $time = new Time();

        $time->idTimes = $row['idTimes'];
        $time->nome = $row['nome'];
        $time->sigla = $row['sigla'];
        $time->cidade = $row['cidade'];
        $time->estado = $row['estado'];
        $time->cor = $row['cor'];
        $time->estadio = $row['estadio'];
        $time->patrimonio = $row['patrimonio'];
        $time->ano = $row['ano'];

        return $time;
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