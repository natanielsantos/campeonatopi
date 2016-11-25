<?php

class EstadiosMySqlDAO implements EstadiosDAO{

	
	public function load($idestadios, $timesIdTimes, $partidaIdpartida){
		$sql = 'SELECT * FROM Estadios WHERE idestadios = ?  AND Times_idTimes = ?  AND Partida_idpartida = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idestadios);
		$sqlQuery->setNumber($timesIdTimes);
		$sqlQuery->setNumber($partidaIdpartida);

		return $this->getRow($sqlQuery);
	}

	
	public function queryAll(){
		$sql = 'SELECT * FROM Estadios';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM Estadios ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	
	public function delete($idestadios, $timesIdTimes, $partidaIdpartida){
		$sql = 'DELETE FROM Estadios WHERE idestadios = ?  AND Times_idTimes = ?  AND Partida_idpartida = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idestadios);
		$sqlQuery->setNumber($timesIdTimes);
		$sqlQuery->setNumber($partidaIdpartida);

		return $this->executeUpdate($sqlQuery);
	}
	
	
	public function insert($estadio){
		$sql = 'INSERT INTO Estadios (nome, apelido, cidade, estado, capacidade, idestadios, Times_idTimes, Partida_idpartida) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($estadio->nome);
		$sqlQuery->set($estadio->apelido);
		$sqlQuery->set($estadio->cidade);
		$sqlQuery->set($estadio->estado);
		$sqlQuery->setNumber($estadio->capacidade);

		
		$sqlQuery->setNumber($estadio->idestadios);

		$sqlQuery->setNumber($estadio->timesIdTimes);

		$sqlQuery->setNumber($estadio->partidaIdpartida);

		$this->executeInsert($sqlQuery);	
		//$estadio->id = $id;
		//return $id;
	}
	
	
	public function update($estadio){
		$sql = 'UPDATE Estadios SET nome = ?, apelido = ?, cidade = ?, estado = ?, capacidade = ? WHERE idestadios = ?  AND Times_idTimes = ?  AND Partida_idpartida = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($estadio->nome);
		$sqlQuery->set($estadio->apelido);
		$sqlQuery->set($estadio->cidade);
		$sqlQuery->set($estadio->estado);
		$sqlQuery->setNumber($estadio->capacidade);

		
		$sqlQuery->setNumber($estadio->idestadios);

		$sqlQuery->setNumber($estadio->timesIdTimes);

		$sqlQuery->setNumber($estadio->partidaIdpartida);

		return $this->executeUpdate($sqlQuery);
	}

	
	public function clean(){
		$sql = 'DELETE FROM Estadios';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNome($value){
		$sql = 'SELECT * FROM Estadios WHERE nome = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByApelido($value){
		$sql = 'SELECT * FROM Estadios WHERE apelido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCidade($value){
		$sql = 'SELECT * FROM Estadios WHERE cidade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEstado($value){
		$sql = 'SELECT * FROM Estadios WHERE estado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCapacidade($value){
		$sql = 'SELECT * FROM Estadios WHERE capacidade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNome($value){
		$sql = 'DELETE FROM Estadios WHERE nome = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByApelido($value){
		$sql = 'DELETE FROM Estadios WHERE apelido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCidade($value){
		$sql = 'DELETE FROM Estadios WHERE cidade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEstado($value){
		$sql = 'DELETE FROM Estadios WHERE estado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCapacidade($value){
		$sql = 'DELETE FROM Estadios WHERE capacidade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	
	protected function readRow($row){
		$estadio = new Estadio();
		
		$estadio->idestadios = $row['idestadios'];
		$estadio->nome = $row['nome'];
		$estadio->apelido = $row['apelido'];
		$estadio->cidade = $row['cidade'];
		$estadio->estado = $row['estado'];
		$estadio->capacidade = $row['capacidade'];
		$estadio->timesIdTimes = $row['Times_idTimes'];
		$estadio->partidaIdpartida = $row['Partida_idpartida'];

		return $estadio;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>