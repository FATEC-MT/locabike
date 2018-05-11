<div class="col-sm-12"><br></div>
<table class="table table-sm table-hover table-striped table-bordered" id="dataTable" style="border: 1px;" width="100%" cellspacing="0">
    <thead class="table table-striped">
<!-- Aqui foi feito o item de Pesquisa	
    <form action="#" method="GET" >
        <tr>
            <th>Pesquisar</th>
            <th><input type="text" name="pesquisar" value=""></th>
            <th><button type="submit" name="search" value="search">Buscar</button></th>
    </form>
	FOI SUBISTITUIDO POR UM JAVASCRIPT
-->	
    <tr>
        <th>Cod.</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ação</th>
    </tr>
</thead>
<tbody>
    <?php
//	Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
//    if (isset($_GET['search'])) {
//        $search = $_GET["pesquisar"];
        try {
//			$stmt = $pdo->prepare("SELECT id, concat(nome,' ',sobrenome) nome, telefone, email, nascimento FROM cliente WHERE nome LIKE '%".$search."%' OR sobrenome LIKE '%".$search."%' ORDER BY id");
            $stmt = $pdo->prepare("SELECT id, concat(nome,' ',sobrenome) nome, telefone, email, nascimento FROM cliente WHERE status = 0");
            if ($stmt->execute()) {
                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $rr = $rs->nascimento;
                    $data = new DateTime($rr);
                    echo "<tr>";
                    echo "<td>" . $rs->id . "</td><td>" . $rs->nome . "</td><td>" . $rs->telefone . "</td><td>" . $rs->email . "</td><td>" . $data = date_format($data, 'd/m/Y') . "</td> ";
                    echo "<td><a href='edita.php?id=$rs->id'>Editar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "Erro: Não foi possível recuperar os dados do banco de dados";
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
//   }
 
/*
foreach($pdo->query('SELECT * FROM cliente') as $lin);
{		
		$data = new DateTime($lin->nascimento);
		$rr = $lin->nascimento;
		
		echo "<tr>";
		echo "<td>" . $lin -> id. "</td><td>" . $lin->nome. "</td><td>" . $row->['telefone'] . "</td><td>" . $row->['email'] . "</td><td>" . $data = date_format($data, 'd/m/Y') . "</td> ";
		echo "<td><a href='edita.php?id=$rs->id'>Editar</a></td>";
		echo "</tr>";
}	
*/
    ?>
    </tr>
</tbody>
</table>