<!DOCTYPE html>
<?PHP require_once('../../config.php');

$id = $_GET['id'];

$profissional = new Profissionai();
$profissional = DAOFactory::getProfissionaisDAO()->load($id);

//DAOFactory::getProfissionaisDAO()->update($profissional);

?>


<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.php" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
            input[type=text], select {
                width: 40%;
                padding: 5px 10px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 35%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 10px;
                width: 100%;
                
                
            }


        </style>

    </head>

    <body>
        
        <div >
            <h2>Alteração de Profissionais</h2>
            <form id="form1" name="form1" method="post" action="altera.php?id=<?php echo $profissional->getIdProfissionais()?>">
            <label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?php echo $profissional->getNome()?> " />
            <br class="clear" /> 
            <label for="dataNascimento">Datanascimento: </label><input type="text" name="dataNascimento" id="dataNascimento" value="<?php echo $profissional->getDataNascimento()?>" />
            <br class="clear" /> 
            <label for="rg">Rg: </label><input type="text" name="rg" id="rg" value="<?php echo $profissional->getRg()?>" />
            <br class="clear" /> 
            <label for="posicao">Posição: </label><input type="text" name="posicao" id="posicao" value="<?php echo $profissional->getPosicao()?>"/>
            <br class="clear" /> 
            <label for="time">Time: </label><input type="text" name="time" id="time" value="<?php echo $profissional->getTime()?>"/>
            <br class="clear" /> 
            <label for="salario">Salário: </label><input type="text" name="salario" id="salario" value="<?php echo $profissional->getSalario()?>" />
            <br class="clear" /> 
            <label for="habilidade">Habilidade: </label><input type="text" name="habilidade" id="habilidade" value="<?php echo $profissional->getHabilidade()?>"/>
            <br class="clear" /> 
            <input type="submit" name="Enviar" id="Enviar" value="Confirmar alteração" />
            <br class="clear" /> 
        </form>
        </div>
    </body>
</html>
