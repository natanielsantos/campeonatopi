<?php

class ArbitrosMySqlDAO implements ArbitrosDAO {

    public function load($id) {
        $sql = 'SELECT * FROM Arbitros WHERE idarbitros = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM Arbitros';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM Arbitros ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function delete($idarbitros) {
        $sql = 'DELETE FROM Arbitros WHERE idarbitros = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idarbitros);
        return $this->executeUpdate($sqlQuery);
    }

    public function insert($arbitro) {
        $sql = 'INSERT INTO Arbitros (nome, dataNascimento, rg, cidade, estado) VALUES (?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($arbitro->nome);
        $sqlQuery->set($arbitro->dataNascimento);
        $sqlQuery->set($arbitro->rg);
        $sqlQuery->set($arbitro->cidade);
        $sqlQuery->set($arbitro->estado);

        $id = $this->executeInsert($sqlQuery);
        $arbitro->idarbitros = $id;
        return $id;
    }

    public function update($arbitro) {
        $sql = 'UPDATE Arbitros SET nome = ?, dataNascimento = ?, rg = ?, cidade = ?, estado = ? WHERE idarbitros = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($arbitro->nome);
        $sqlQuery->set($arbitro->dataNascimento);
        $sqlQuery->set($arbitro->rg);
        $sqlQuery->set($arbitro->cidade);
        $sqlQuery->set($arbitro->estado);

        $sqlQuery->setNumber($arbitro->idarbitros);
        return $this->executeUpdate($sqlQuery);
    }

    public function clean() {
        $sql = 'DELETE FROM Arbitros';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByNome($value) {
        $sql = 'SELECT * FROM Arbitros WHERE nome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDataNascimento($value) {
        $sql = 'SELECT * FROM Arbitros WHERE dataNascimento = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByRg($value) {
        $sql = 'SELECT * FROM Arbitros WHERE rg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCidade($value) {
        $sql = 'SELECT * FROM Arbitros WHERE cidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEstado($value) {
        $sql = 'SELECT * FROM Arbitros WHERE estado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByNome($value) {
        $sql = 'DELETE FROM Arbitros WHERE nome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDataNascimento($value) {
        $sql = 'DELETE FROM Arbitros WHERE dataNascimento = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByRg($value) {
        $sql = 'DELETE FROM Arbitros WHERE rg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCidade($value) {
        $sql = 'DELETE FROM Arbitros WHERE cidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEstado($value) {
        $sql = 'DELETE FROM Arbitros WHERE estado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    protected function readRow($row) {
        $arbitro = new Arbitro();

        $arbitro->idarbitros = $row['idarbitros'];
        $arbitro->nome = $row['nome'];
        $arbitro->dataNascimento = $row['dataNascimento'];
        $arbitro->rg = $row['rg'];
        $arbitro->cidade = $row['cidade'];
        $arbitro->estado = $row['estado'];

        return $arbitro;
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