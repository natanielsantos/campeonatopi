<?php
	
        // CONFIGURAÇÕES GERAIS
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
        // ÁRBITROS
	require_once('class/dao/ArbitrosDAO.class.php');
	require_once('class/dto/Arbitro.class.php');
	require_once('class/mysql/ArbitrosMySqlDAO.class.php');
	require_once('class/mysql/ext/ArbitrosMySqlExtDAO.class.php');
        
        // ESTÁDIOS
	require_once('class/dao/EstadiosDAO.class.php');
	require_once('class/dto/Estadio.class.php');
	require_once('class/mysql/EstadiosMySqlDAO.class.php');
	require_once('class/mysql/ext/EstadiosMySqlExtDAO.class.php');
        
        // PARTIDA
	require_once('class/dao/PartidaDAO.class.php');
	require_once('class/dto/Partida.class.php');
	require_once('class/mysql/PartidaMySqlDAO.class.php');
	require_once('class/mysql/ext/PartidaMySqlExtDAO.class.php');
        
        
        // PROFISSIONAIS
	require_once('class/dao/ProfissionaisDAO.class.php');
	require_once('class/dto/Profissionai.class.php');
	require_once('class/mysql/ProfissionaisMySqlDAO.class.php');
	require_once('class/mysql/ext/ProfissionaisMySqlExtDAO.class.php');
        
        // TIMES
	require_once('class/dao/TimesDAO.class.php');
	require_once('class/dto/Time.class.php');
	require_once('class/mysql/TimesMySqlDAO.class.php');
	require_once('class/mysql/ext/TimesMySqlExtDAO.class.php');