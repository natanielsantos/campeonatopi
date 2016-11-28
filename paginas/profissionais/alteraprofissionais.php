<?php

require_once('../../config.php');

$arr = DAOFactory::getProfissionaisDAO()->queryAll();

echo '<style>
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>';

echo '<table id=customers><tr><th>Nome</th>'
 . '<th>Data de Nascimento</th>'
 . '<th>RG</th>'
 . '<th>Posição</th>'
 . '<th>Time</th>'
 . '<th>Salário</th>'
 . '<th>Habilidade</th><th>EXCLUIR</th></tr>';

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
echo '</table>';

