<?php


class DAOFactory{
	

	public static function getArbitrosDAO(){
		return new ArbitrosMySqlExtDAO();
	}


	public static function getEstadiosDAO(){
		return new EstadiosMySqlExtDAO();
	}


	public static function getPartidaDAO(){
		return new PartidaMySqlExtDAO();
	}

	public static function getProfissionaisDAO(){
		return new ProfissionaisMySqlExtDAO();
	}


	public static function getTimesDAO(){
		return new TimesMySqlExtDAO();
	}


}
?>