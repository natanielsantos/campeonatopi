<html>
 <head>
  <link rel="stylesheet" type="text/css" href="../../css/estilo.php" />
  <title>Exibir dados com PHP/MySql</title>
 </head>
<body>

<?php

require_once('../../config.php');

$nome = $_POST['nome'];

$arr = DAOFactory::getProfissionaisDAO()->queryByNome($nome);

echo '<table>'
 . '</thead> <tr><td>Nome</td>'
 . '<td>Data de Nascimento</td>'
 . '<td>RG</td>'
 . '<td>Posição</td>'
 . '<td>Time</td>'
 . '<td>Salário</td>'
 . '<td>Habilidade</td></tr> </thead>'
 . '<tfoot>
<tr><th colspan="4">Tabela de listagem de profissionais por nome</th></tr>
</tfoot>';

for ($i = 0; $i < count($arr); $i++) {
    $row = $arr[$i];
    echo '<tbody>'
    . '<tr><td>' . $row->nome . '</td>'
    . '<td>' . $row->dataNascimento . '</td>'
    . '<td>' . $row->rg . '</td>'
    . '<td>' . $row->posicao . '</td>'
    . '<td>' . $row->time . '</td>'
    . '<td>' . $row->salario . '</td>'
    . '<td>' . $row->habilidade . '</td></tr>'
    . '</tbody>';
}
echo '</table>';
?>
</body>
</html>