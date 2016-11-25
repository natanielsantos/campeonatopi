<?php

interface ArbitrosDAO{

	
	public function load($id);

	public function queryAll();
	

	public function queryAllOrderBy($orderColumn);
	

	public function delete($idarbitros);
	

	public function insert($arbitro);
	

	public function update($arbitro);	

	public function clean();

	public function queryByNome($value);

	public function queryByDataNascimento($value);

	public function queryByRg($value);

	public function queryByCidade($value);

	public function queryByEstado($value);


	public function deleteByNome($value);

	public function deleteByDataNascimento($value);

	public function deleteByRg($value);

	public function deleteByCidade($value);

	public function deleteByEstado($value);


}
?>