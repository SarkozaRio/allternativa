<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$id = $_POST["id"];
	$cliente = $_POST["cliente"];
	$agencia = $_POST["agencia"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	



	$sql = "UPDATE clientes SET  cliente='$cliente', agencia='$agencia', email='$email', telefone='$telefone', modified=NOW() WHERE id='$id'";
    

	 $result = $pdo->prepare($sql);

	$result->execute();

	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Cliente atualizado com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Cliente não foi atualizado\");
			</script>


		";


	}


	
?>