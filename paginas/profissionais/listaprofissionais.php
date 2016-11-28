<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" type="text/css" href="../../estilos.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>


        <?php
        require_once('../../config.php');

        $arr = DAOFactory::getProfissionaisDAO()->queryAll();

        echo '<div><table id=customers><tr><th>Nome Completo</th>'
        . '<th>Data de Nascimento</th>'
        . '<th>RG</th>'
        . '<th>Posição</th>'
        . '<th>Time</th>'
        . '<th>Salário</th>'
        . '<th>Habilidade</th></tr>';

        for ($i = 0; $i < count($arr); $i++) {
            $row = $arr[$i];
            $time = DAOFactory::getTimesDAO()->load($row->time);
            
            
            
            echo '<tr><td>' . $row->nome . '</td>'
            . '<td>' . $row->dataNascimento . '</td>'
            . '<td>' . $row->rg . '</td>'
            . '<td>' . $row->posicao . '</td>'
            . '<td>' . $time->nome . '</td>'
            . '<td>' . $row->salario . '</td>'
            . '<td>' . $row->habilidade . '</td></tr>';
        }
        echo '</table></div>';
        ?>

    </body>
</html>