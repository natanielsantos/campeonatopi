<?php
	
        // CONFIGURAÇÕES GERAIS
	require_once('sql/Connection.class.php');
	require_once('sql/ConnectionFactory.class.php');
	require_once('sql/ConnectionProperty.class.php');
	require_once('sql/QueryExecutor.class.php');
	require_once('sql/Transaction.class.php');
	require_once('sql/SqlQuery.class.php');
	require_once('DAO/ArrayList.class.php');
	require_once('interfaces/DAOFactory.class.php');
        //require_once ('css/estilos.css');
 	
        // ÁRBITROS
	require_once('interfaces/ArbitrosDAO.class.php');
	require_once('modelos/Arbitro.class.php');
	require_once('DAO/ArbitrosMySqlDAO.class.php');
	require_once('DAO/ext/ArbitrosMySqlExtDAO.class.php');
        
        // ESTÁDIOS
	require_once('interfaces/EstadiosDAO.class.php');
	require_once('modelos/Estadio.class.php');
	require_once('DAO/EstadiosMySqlDAO.class.php');
	require_once('DAO/ext/EstadiosMySqlExtDAO.class.php');
        
        // PARTIDA
	require_once('interfaces/PartidaDAO.class.php');
	require_once('modelos/Partida.class.php');
	require_once('DAO/PartidaMySqlDAO.class.php');
	require_once('DAO/ext/PartidaMySqlExtDAO.class.php');
        
        
        // PROFISSIONAIS
	require_once('interfaces/ProfissionaisDAO.class.php');
	require_once('modelos/Profissionai.class.php');
	require_once('DAO/ProfissionaisMySqlDAO.class.php');
	require_once('DAO/ext/ProfissionaisMySqlExtDAO.class.php');
        
        // TIMES
	require_once('interfaces/TimesDAO.class.php');
	require_once('modelos/Time.class.php');
	require_once('DAO/TimesMySqlDAO.class.php');
	require_once('DAO/ext/TimesMySqlExtDAO.class.php');