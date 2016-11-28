<?php

require_once('../../config.php');

$id = $_GET['id'];
$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$rg = $_POST['rg'];
$posicao = $_POST['posicao'];
$time = $_POST['time'];
$salario = $_POST['salario'];
$habilidade = $_POST['habilidade'];

$profissional = DAOFactory::getProfissionaisDAO()->load($id);

$profissional->setNome($nome);
$profissional->setDataNascimento($dataNascimento);
$profissional->setRg($rg);
$profissional->setPosicao($posicao);
$profissional->setTime($time);
$profissional->setSalario($salario);
$profissional->setHabilidade($habilidade);



DAOFactory::getProfissionaisDAO()->update($profissional);


echo '<script language="javascript"> alert("Alterado com sucesso!")</script> ';
echo '<script language="javascript">window.location="alteraprofissionais.php"</script>';
