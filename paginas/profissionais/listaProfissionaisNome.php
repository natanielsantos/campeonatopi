<html>
 <head>
  <link rel="stylesheet" type="text/css" href="../../estilos.css" />
  <title>Exibir dados com PHP/MySql</title>
 </head>
<body>

<?php

require_once('../../config.php');

$nome = $_POST['nome'];

$arr = DAOFactory::getProfissionaisDAO()->queryByNome($nome);

echo '<div><table id=customers>'
 . '</thead><tr><th>Nome</th>'
 . '<th>Data de Nascimento</th>'
 . '<th>RG</th>'
 . '<th>Posição</th>'
 . '<th>Time</th>'
 . '<th>Salário</th>'
 . '<th>Habilidade</th></tr> </thead>'
 . '<tfoot>
<tr>Tabela de listagem de profissionais por nome</tr>
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
echo '</table></div>';
?>
</body>
</html>