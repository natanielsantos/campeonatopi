
        <?PHP
        require_once 'config.php';

        echo '<table>';
        echo '<tr>';
        echo '<th>idarbitros</th>';
        echo '<th>nome</th>';
        echo '<th>dataNascimento</th>';
        echo '<th>rg</th>';
        echo '<th>cidade</th>';
        echo '<th>estado</th>';
        echo '</tr>';

        $resultado = DAOFactory::getArbitrosDAO()->queryAll();

        for ($i = 0; $i < count($resultado); $i++) {
            $row = $resultado[$i];

            echo '<tr>';
            echo '<td>' . $row->idarbitros . '</td>';
            echo '<td>' . $row->nome . '</td>';
            echo '<td>' . $row->dataNascimento . '</td>';
            echo '<td>' . $row->rg . '</td>';
            echo '<td>' . $row->cidade . '</td>';
            echo '<td>' . $row->estado . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </body>
</html>
