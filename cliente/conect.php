<?php
  	try {
        $pdo = new PDO('mysql:host=localhost;dbname=localbike', 'root', '');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      


        	} catch (Exception $e) {
  		    echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Servidor fora do ar!</strong> !
                      </div>; ' ;
  	}
  ?>