<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  

<form id="form1" method="post" action="#" datatype="">
 
  <div class="form-row">
    <div class="form-group col-md-4">
       <label for="nome" class="control-label">Nome:</label>
       <input id="nome" name="nome" class="form-control" placeholder="Digite seu Nome..." type="text" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="email" class="control-label">Email:</label>
      <input id="email" name="email" class="form-control" placeholder="Digite seu E-mail..." type="email" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="Telefone" class="control-label">Telefone:</label>
      <input class="form-control" type="tel" name="fone" id="fone" onkeypress="" data-mask="(##) #####-####" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="numtorres" class="control-label">Mensagem:</label>
      <textarea class="form-control" id="mensage" name="mensage" placeholder="Deixe uma Mensagem..." required="" rows="3"></textarea>
    </div>

    <div class="form-group col-sm-12">
    <button type="submit" name="salvar" value="salvar" class="btn btn-success">Salvar</button>
    <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>


  </div>

</form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/jquery.mask.js"></script>
    <script src="js/jquery.mask.test.js"></script>
    <script src="js/valida.js"></script>

    </body>
</html>