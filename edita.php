<?php 
include 'conect.php';
include 'cadastro.php';

	if(isset($_GET['id'])) {
		  
	$id = trim(strip_tags($_GET["id"])); 

	$stmt = $pdo->prepare("SELECT * FROM cliente WHERE id = '$id' AND status = 0");
	$stmt->execute();

	$rs = $stmt->fetch(PDO::FETCH_OBJ);
	 
	$nome = $rs->nome ; 
	$sobrenome = $rs->sobrenome ;
	$cpf = $rs->CPF;
	$telefone = $rs->telefone ;
	$email = $rs->email ;
	$data = $rs->nascimento ;
	$data = date("d/m/Y",strtotime(str_replace('/','-',$data)));  
	
	}

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
<div style="margin=auto; width=500px; height=500px">

	<form action="#" method="post" >
		<table>
		<table>
		<tr>
		<th>NOME</th>
		<th><input type="text" name="nome" value="<?php echo $nome; ?>" required=""></th>
		</tr>
		<tr>
		<th>SOBRE NOME</th>	
		<th><input type="text" name="sobrenome" value="<?php echo $sobrenome; ?>" required=""></th>
		</tr>
		<tr>
		<th>CPF</th>	
		<th><input type="text" name="cpf" value="<?php echo $cpf; ?>" required="" onkeypress="" data-mask="000.000.000-00" disabled></th>
		</tr>		
		<tr>
		<th>TELEFONE</th>	
		<th><input type="tel" id="telefone" name="telefone"  value="<?php echo $telefone; ?>" onkeypress="" data-mask="(##)#####-####" min="14" max="14"/></th>
		</tr>
		<tr>
		<th>EMAIL</th>	
		<th><input type="email" name="email"  value="<?php echo $email; ?>" required=""></th>
		</tr>
		<tr>
		<th>DATA NASCIMENTO</th>	
		<th><input type="date" name="nascimento" value="<?php echo $data; ?>" placeholder="01/01/2000"></th>
		</tr>
		</table>
		
		<button type="submit" name="atualizar" value="atualizar">Atualizar</button>
		<button type="submit" name="excluir" value="atualizar">Excluir</button>
		<button type="submit" name="voltar" value="voltar">Voltar</button>

	</form>

</div>
    <?php 
    include 'tabela.php';
     ?>
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