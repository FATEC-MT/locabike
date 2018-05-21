<?php

if (isset($_POST['enviar'])) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $cpf = str_replace('.','', $cpf);
    $cpf = str_replace('-','', $cpf);
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $data = date("Y-m-d", strtotime($nascimento));
//    return $cpf;
   try {
        $ins = $pdo->prepare("INSERT INTO cliente(nome, sobrenome, cpf, telefone, email, nascimento)VALUES('" . $nome . "','" . $sobrenome . "','".$cpf."','" . $telefone . "','" . $email . "','" . $data . "') ");
        $ins->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['atualizar'])) {

    $id = trim(strip_tags($_GET["id"]));
    $nome = trim(strip_tags($_POST["nome"]));
    $sobrenome = trim(strip_tags($_POST["sobrenome"]));
    $telefone = trim(strip_tags($_POST["telefone"]));
    $email = trim(strip_tags($_POST["email"]));
    $nascimento = trim(strip_tags($_POST["nascimento"]));
    $data = date("Y-m-d", strtotime(str_replace('/', '-', $nascimento)));

    $sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', email = '$email', nascimento = '$data'  WHERE id = '$id' ";
    // Prepare statement
    $stmt = $pdo->prepare($sql);
    // executa a  query
    $stmt->execute();
    header("location: index.php");
    $pdo = null;
}

if (isset($_POST['excluir'])) {

    $id = trim(strip_tags($_GET["id"]));
    $sql= "SELECT id, concat(nome,' ',sobrenome) nome, telefone, email, nascimento, statusdesc, status FROM cliente ";    
    $rs -> $sql;
    $status = $rs->status;
    
    if($status == 0){
    try {
        $sql = "UPDATE cliente SET status = 1 , statusdesc = 'INATIVO' WHERE id = '$id' ";
        // Prepare statement
        $stmt = $pdo->prepare($sql);
        // executa a  query
        $stmt->execute();
        header("location: index.php");
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
//    }else if ($status == 1){
    }else if($status == 1){
        try {
        $sql = "UPDATE cliente SET status = 0 , statusdesc = 'ATIVO' WHERE id = '$id' ";
        // Prepare statement
        $stmt = $pdo->prepare($sql);
        // executa a  query
        $stmt->execute();
        header("location: index.php");
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }    
    }
    $pdo = null;
}

if (isset($_POST['voltar'])) {
    header("location: index.php");
}
?>