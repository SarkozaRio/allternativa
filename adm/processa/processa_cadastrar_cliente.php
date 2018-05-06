<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$cliente = $_POST["cliente"];
	$agencia = $_POST["agencia"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$situacao = $_POST["situacao"];

	
	$sql = "INSERT INTO clientes (cliente, agencia, email, telefone, created, situacao_id) VALUES ('$cliente','$agencia','$email','$telefone', NOW(), '$situacao')";
    

	 $result = $pdo->prepare($sql);

	$result->execute();




	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Cliente cadastrado com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Cliente não foi cadastrado\");
			</script>


		";


	}


	


	
?>