<?php

if(isset($_POST['enviar'])) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
	$cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
	$data = date("Y-m-d",strtotime(str_replace('-','/',$nascimento))); 
	
        try{
            $ins = $pdo->prepare("INSERT INTO cliente(nome, sobrenome, CPF, telefone, email, nascimento)VALUES('".$nome."','".$sobrenome."','".$cpf."','".$telefone."','".$email."','".$data."') ");
            $ins->execute();
        }catch (Exception $e){
            echo $e->getMessage();
        }
}

  if(isset($_POST['atualizar'])) {
	  
            $id = trim(strip_tags($_GET["id"]));           
			$nome = trim(strip_tags($_POST["nome"]));
			$sobrenome =trim(strip_tags($_POST["sobrenome"]));
//			$cpf =trim(strip_tags($_POST["cpf"]));
			$telefone = trim(strip_tags($_POST["telefone"]));
			$email = trim(strip_tags($_POST["email"]));
			$nascimento = trim(strip_tags($_POST["nascimento"]));
			$data = date("Y-m-d",strtotime(str_replace('/','-',$nascimento))); 
//O CPF NÃO PODE SER ALTERADO SE HOUVER ERRO TERÁ DE SER FEITO UM OUTRO CADASTRO COM O CPF CORRETO			
//           $sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', email = '$email', nascimento = '$data', cpf = $cpf  WHERE id = '$id' ";  
           $sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', email = '$email', nascimento = '$data' WHERE id = '$id' ";
                    // Prepare statement
                    $stmt = $pdo->prepare($sql);
                    // executa a  query
                    $stmt->execute();
					header("location: index.php");
                    $pdo = null;
            }

 if(isset($_POST['excluir'])) {
      
            $id = trim(strip_tags($_GET["id"]));           
//NÃO É POSSIVEL EXCLUIR UM REGISTRO, ASSIM O USUARIO NÃO PODERÁ DELETAR MAS PODE MARCAR COMO INATIVO
            try {
                    $sql = "UPDATE cliente SET status = 1 WHERE id = '$id' ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    header("location: index.php");
                    }
                    catch(PDOException $e)
                    {
                    echo $sql . "<br>" . $e->getMessage();
                    }
                    $pdo = null;
            }
  
  if(isset($_POST['voltar'])) {
                    header("location: index.php");
								} 
?>