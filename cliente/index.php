<?php
include 'conect.php';
include 'cadastro.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>cadastra</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">		
    </head>
    <style>
        input 
        {
            border: 2px solid #A2A2A2;
            border-radius: 5px;
        }
        h5,h6
        {
            color: #A2A2A2;
            font-family: Calibri;
        }
        button
        {
            border-radius: 5px;
            backgroud-color: #646464;
            width: 30%;
            font-family: Calibri;
        }
        input
        {
            color: #646464;
            font-family: Calibri;
            width: 100%;
        }
    </style>
    <body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <div class="col-sm-12"><br></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <form action="#" method="post" >
                        <table>
                            <tr>
                                <th><h5>NOME</h5></th>
                                <th><input type="text" name="nome" value="" required="" id="texto1" onkeypress=" "></th>
                            </tr>
                            <tr>
                                <th><h5>SOBRENOME</h5></th>	
                                <th><input type="text" name="sobrenome" value="" required="" id="texto2" onkeypress=" "></th>
                            </tr>
                            <tr>
                                <th><h5>CPF<h5></th>	
                                            <th><input type="text" name="cpf" value="" required="" onkeypress="" data-mask="000.000.000-00" minlength="11" maxlength="11" placeholder="000.000.000-00"></th>
                                            </tr>		
                                            <tr>
                                                <th><h5>TELEFONE</h5></th>	
                                                <th><input type="text" id="telefone" name="telefone" value="" onkeypress="" data-mask="(00)00000-0000" minlength="14" maxlength="14" placeholder="(00)00000-0000"/></th>
                                            </tr>
                                            <tr>
                                                <th><h5>EMAIL</h5></th>	
                                                <th><input type="email" name="email" value="" required="" placeholder="email@email.com"></th>
                                            </tr>
                                            <tr>
                                                <th><h5>DATA NASCIMENTO</h5></th>	
                                                <th><input type="text" name="nascimento" value="" data-mask="00/00/0000" placeholder="01/12/2000"  required="" minlength="10" maxlength="10"></th>
                                            </tr>
                                            </table>
                                            <button type="submit" name="enviar" value="enviar">Enviar</button>

                                            </form>
                                            </div>
                                            <div class="col-sm"></div>
                                            </div>
                                            </div>
                                            <div>
                                            
                                            <?php
                                            include 'tabela.php';
                                            ?>

                                            </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript">
$(document).ready(function () {
    $('#dataTable').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    });
});

document.getElementById("telefone").onkeypress = function (e) {
    var chr = String.fromCharCode(e.which);
    if ("()- 1234567890".indexOf(chr) < 0)
        return false;
};

document.getElementById("texto1").onkeypress = function (e) {
    var chr = String.fromCharCode(e.which);
    if ("qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM ".indexOf(chr) < 0)
        return false;
};
document.getElementById("texto2").onkeypress = function (e) {
    var chr = String.fromCharCode(e.which);
    if ("qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM ".indexOf(chr) < 0)
        return false;
};
    </script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>		
    <script src="js/jquery.mask.js"></script>
    <script src="js/jquery.mask.test.js"></script>
    <script src="js/valida.js"></script>
    </body>
    </html>