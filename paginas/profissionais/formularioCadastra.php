<!DOCTYPE html>
<?PHP require_once('../../config.php');
?>


<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form id="form1" name="form1" method="post" action="cadastra.php">
            <label for="nome">Nome</label><input type="text" name="nome" id="nome" />
            <br class="clear" /> 
            <label for="dataNascimento">Datanascimento</label><input type="text" name="dataNascimento" id="dataNascimento" />
            <br class="clear" /> 
            <label for="rg">Rg</label><input type="text" name="rg" id="rg" />
            <br class="clear" /> 
            <label for="posicao">Posicao</label><input type="text" name="posicao" id="posicao" />
            <br class="clear" /> 
            <label for="time">Time</label><input type="text" name="time" id="time" />
            <br class="clear" /> 
            <label for="salario">Salario</label><input type="text" name="salario" id="salario" />
            <br class="clear" /> 
            <label for="habilidade">Habilidade</label><input type="text" name="habilidade" id="habilidade" />
            <br class="clear" /> 
            <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
            <br class="clear" /> 
        </form>
    </body>
</html>