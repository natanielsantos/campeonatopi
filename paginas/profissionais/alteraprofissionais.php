
<link rel="stylesheet" type="text/css" href="../../estilos.css" />

<?php

require_once('../../config.php');

$arr = DAOFactory::getProfissionaisDAO()->queryAll();

echo '<div><table id=customers><tr><th>Nome</th>'
 . '<th>Data de Nascimento</th>'
 . '<th>RG</th>'
 . '<th>Posição</th>'
 . '<th>Time</th>'
 . '<th>Salário</th>'
 . '<th>Habilidade</th><th>ALTERAR</th></tr>';

for ($i = 0; $i < count($arr); $i++) {
    $row = $arr[$i];
    echo '<tr><td>' . $row->nome . '</td>'
    . '<td>' . $row->dataNascimento . '</td>'
    . '<td>' . $row->rg . '</td>'
    . '<td>' . $row->posicao . '</td>'
    . '<td>' . $row->time . '</td>'
    . '<td>' . $row->salario . '</td>'
    . '<td>' . $row->habilidade . '</td>'
    . '<td><form name="excluir" method="post" action="formularioAltera.php?id='.$row->idProfissionais.'">
        <input type="submit" value="ALTERAR" name="alterar" /><input type="hidden" name="idProfissionais" readonly="readonly" />
</form> </td></tr>';
}
echo '</table></div>';
