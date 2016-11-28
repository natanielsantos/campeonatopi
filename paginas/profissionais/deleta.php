<link rel="stylesheet" type="text/css" href="../../estilos.css" />

<?php

require_once('../../config.php');

$id = $_GET['id'];

$profissional = new Profissionai();

DAOFactory::getProfissionaisDAO()->delete($id);


echo '<script language="javascript"> alert("Deletado com sucesso!")</script> ';
echo '<script language="javascript">window.location="deletaprofissionais.php"</script>';
