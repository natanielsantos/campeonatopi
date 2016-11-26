<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         
        <title></title>
       
    </head>
    <body>
        <?PHP
        
         include_once 'conexao.php';
         
         echo '<table>';
         echo '<tr>';
         echo '<th>idarbitros</th>';
         echo '<th>nome</th>';
         echo '<th>dataNascimento</th>';
         echo '<th>rg</th>';
         echo '<th>cidade</th>';
         echo '<th>estado</th>';
         echo '</tr>';
         
         $resultado = mysqli_query($conn,'SELECT * FROM Arbitros');
         while (($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) != NULL) {
             echo '<tr>';
             echo '<td>' . $row['idarbitros'] . '</td>';
             echo '<td>' . $row['nome'] . '</td>';
             echo '<td>' . $row['dataNascimento'] . '</td>';
             echo '<td>' . $row['rg'] . '</td>';
             echo '<td>' . $row['cidade'] . '</td>';
             echo '<td>' . $row['estado'] . '</td>';
             echo '</tr>';
         }
         mysqli_free_result($resultado);
         echo '</table>';
        ?>
    </body>
</html>
