<link rel="stylesheet" type="text/css" href="../../estilos.css" />
<?php

require_once('../../config.php');

$id = $_POST['idProfissionais'];

$profissional = new Profissionai();

DAOFactory::getProfissionaisDAO()->delete($id);


echo '<script language="javascript"> alert("Deletado com sucesso!")</script> ';
echo '<script language="javascript">window.location="listaprofissionais.php"</script>';
