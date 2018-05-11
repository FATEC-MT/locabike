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
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="col-sm-12"><br></div>
<div style="margin=center; width=600px; height=600px; align-items: center; display= flex;" >

	<form action="#" method="post" >
		<table>
		<tr>
		<th>NOME</th>
		<th><input type="text" name="nome" value="" required=""></th>
		</tr>
		<tr>
		<th>SOBRE NOME</th>	
		<th><input type="text" name="sobrenome" value="" required=""></th>
		</tr>
		<tr>
		<th>CPF</th>	
		<th><input type="text" name="cpf" value="" required="" onkeypress="" data-mask="000.000.000-00"></th>
		</tr>		
		<tr>
		<th>TELEFONE</th>	
		<th><input type="text" id="telefone" name="telefone" value="" onkeypress="" data-mask="(00)00000-0000" min="14" max="14"/></th>
		</tr>
		<tr>
		<th>EMAIL</th>	
		<th><input type="email" name="email" value="" required="" placeholder="email@email.com"></th>
		</tr>
		<tr>
		<th>DATA NASCIMENTO</th>	
		<th><input type="date" name="nascimento" value="" placeholder="01/01/2000"></th>
		</tr>
		</table>
		<button type="submit" name="enviar" value="enviar">Enviar</button>
		
	</form>
</div>
    <?php 
    include 'tabela.php';
     ?>
 
</div>
 
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
     <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').dataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
                }
            } );
        } );
    </script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>		
		<script src="js/jquery.mask.js"></script>
		<script src="js/jquery.mask.test.js"></script>
		<script src="js/valida.js"></script>
</body>
</html>