<?php

class PartidaMySqlDAO implements PartidaDAO {

    public function load($id) {
        $sql = 'SELECT * FROM Partida WHERE idpartida = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM Partida';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM Partida ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function delete($idpartida) {
        $sql = 'DELETE FROM Partida WHERE idpartida = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idpartida);
        return $this->executeUpdate($sqlQuery);
    }

    public function insert($partida) {
        $sql = 'INSERT INTO Partida (timeVisitante, timeMandante, arbitroPrincipal, arbitroAuxiliar1, arbitroAuxiliar2, dataPartida, horaPartida) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->setNumber($partida->timeVisitante);
        $sqlQuery->setNumber($partida->timeMandante);
        $sqlQuery->setNumber($partida->arbitroPrincipal);
        $sqlQuery->setNumber($partida->arbitroAuxiliar1);
        $sqlQuery->setNumber($partida->arbitroAuxiliar2);
        $sqlQuery->set($partida->dataPartida);
        $sqlQuery->set($partida->horaPartida);

        $id = $this->executeInsert($sqlQuery);
        $partida->idpartida = $id;
        return $id;
    }

    public function update($partida) {
        $sql = 'UPDATE Partida SET timeVisitante = ?, timeMandante = ?, arbitroPrincipal = ?, arbitroAuxiliar1 = ?, arbitroAuxiliar2 = ?, dataPartida = ?, horaPartida = ? WHERE idpartida = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->setNumber($partida->timeVisitante);
        $sqlQuery->setNumber($partida->timeMandante);
        $sqlQuery->setNumber($partida->arbitroPrincipal);
        $sqlQuery->setNumber($partida->arbitroAuxiliar1);
        $sqlQuery->setNumber($partida->arbitroAuxiliar2);
        $sqlQuery->set($partida->dataPartida);
        $sqlQuery->set($partida->horaPartida);

        $sqlQuery->setNumber($partida->idpartida);
        return $this->executeUpdate($sqlQuery);
    }

    public function clean() {
        $sql = 'DELETE FROM Partida';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByTimeVisitante($value) {
        $sql = 'SELECT * FROM Partida WHERE timeVisitante = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByTimeMandante($value) {
        $sql = 'SELECT * FROM Partida WHERE timeMandante = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByArbitroPrincipal($value) {
        $sql = 'SELECT * FROM Partida WHERE arbitroPrincipal = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByArbitroAuxiliar1($value) {
        $sql = 'SELECT * FROM Partida WHERE arbitroAuxiliar1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByArbitroAuxiliar2($value) {
        $sql = 'SELECT * FROM Partida WHERE arbitroAuxiliar2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDataPartida($value) {
        $sql = 'SELECT * FROM Partida WHERE dataPartida = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByHoraPartida($value) {
        $sql = 'SELECT * FROM Partida WHERE horaPartida = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByTimeVisitante($value) {
        $sql = 'DELETE FROM Partida WHERE timeVisitante = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByTimeMandante($value) {
        $sql = 'DELETE FROM Partida WHERE timeMandante = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByArbitroPrincipal($value) {
        $sql = 'DELETE FROM Partida WHERE arbitroPrincipal = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByArbitroAuxiliar1($value) {
        $sql = 'DELETE FROM Partida WHERE arbitroAuxiliar1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByArbitroAuxiliar2($value) {
        $sql = 'DELETE FROM Partida WHERE arbitroAuxiliar2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDataPartida($value) {
        $sql = 'DELETE FROM Partida WHERE dataPartida = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByHoraPartida($value) {
        $sql = 'DELETE FROM Partida WHERE horaPartida = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    protected function readRow($row) {
        $partida = new Partida();

        $partida->idpartida = $row['idpartida'];
        $partida->timeVisitante = $row['timeVisitante'];
        $partida->timeMandante = $row['timeMandante'];
        $partida->arbitroPrincipal = $row['arbitroPrincipal'];
        $partida->arbitroAuxiliar1 = $row['arbitroAuxiliar1'];
        $partida->arbitroAuxiliar2 = $row['arbitroAuxiliar2'];
        $partida->dataPartida = $row['dataPartida'];
        $partida->horaPartida = $row['horaPartida'];

        return $partida;
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