<?php 
include 'conect.php';
include 'cadastro.php';

if(isset($_POST['id'])) {

    $id = $_POST["id"];
}


$descricao = $_POST["descricao"];

$valor = $_POST["valor"];

echo"<!DOCTYPE html>";
echo"<html lang='en'>";
echo"<head>";
echo	"<meta charset='UTF-8'>";
echo	"<title>cadastra</title>";
echo"</head>";
echo"<body>";
echo"<div style='margin=auto; width=500px; height=500px'>";
echo	"<form action='#' method='post'>";
echo		"<table>";
echo		"<tr>";
echo		"<th>DESCRICAO</th>";
echo		"<th>VALOR</th>";		
echo		"</tr>";
echo		"<tr>";
echo		"<th><input type='text' name='descricao' value='".$descricao."'></th>";
echo		"<th><input type='text' name='valor' value='".$valor."'></th>";
echo		"</tr>";
echo		"</table>";
echo		"<button type='submit' name='enviar' value='enviar'>Enviar</button>";
echo		"<button type='submit' name='editar' value='editar'>Editar</button>";
echo	"</form>";
echo"</div>";

    include 'tabela.php';
echo"</body>";
echo"</html>"; 
?>