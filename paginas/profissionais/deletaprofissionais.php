<?php

require_once('../../config.php');

$arr = DAOFactory::getProfissionaisDAO()->queryAll();

echo '<table><tr><td>Nome</td>'
 . '<td>Data de Nascimento</td>'
 . '<td>RG</td>'
 . '<td>Posição</td>'
 . '<td>Time</td>'
 . '<td>Salário</td>'
 . '<td>Habilidade</td><td>EXCLUIR</td></tr>';

for ($i = 0; $i < count($arr); $i++) {
    $row = $arr[$i];
    echo '<tr><td>' . $row->nome . '</td>'
    . '<td>' . $row->dataNascimento . '</td>'
    . '<td>' . $row->rg . '</td>'
    . '<td>' . $row->posicao . '</td>'
    . '<td>' . $row->time . '</td>'
    . '<td>' . $row->salario . '</td>'
    . '<td>' . $row->habilidade . '</td>'
    . '<td><form name="excluir" method="post" action="deleta.php?id='.$row->idProfissionais.'">
        <input type="submit" value="EXCLUIR" name="excluir" /><input type="hidden" name="idProfissionais" readonly="readonly" />
</form> </td></tr>';
}
echo '</table>';

