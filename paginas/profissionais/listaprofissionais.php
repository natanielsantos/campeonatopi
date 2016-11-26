<?php

require_once('../../config.php');

$arr = DAOFactory::getProfissionaisDAO()->queryAll();

echo '<table><tr><td>Nome</td>'
 . '<td>Data de Nascimento</td>'
 . '<td>RG</td>'
 . '<td>Posição</td>'
 . '<td>Time</td>'
 . '<td>Salário</td>'
 . '<td>Habilidade</td></tr>';

for ($i = 0; $i < count($arr); $i++) {
    $row = $arr[$i];
    echo '<tr><td>' . $row->nome . '</td>'
    . '<td>' . $row->dataNascimento . '</td>'
    . '<td>' . $row->rg . '</td>'
    . '<td>' . $row->posicao . '</td>'
    . '<td>' . $row->time . '</td>'
    . '<td>' . $row->salario . '</td>'
    . '<td>' . $row->habilidade . '</td></tr>';
}
echo '</table>';

