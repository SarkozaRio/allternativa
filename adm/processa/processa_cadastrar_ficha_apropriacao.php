<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$titulo = $_POST["titulo"];
	$data = $_POST["data"];
	$id_cliente = $_POST["id_cliente"];

	

	$sql = "INSERT INTO ficha_apropriacao (titulo, data, id_cliente, created) VALUES ('$titulo','$data', '$id_cliente',NOW())";
    

	 $result = $pdo->prepare($sql);

	$result->execute();



	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=5&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha de Apropriação criada com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=5&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha de Apropriação não foi criada.\");
			</script>


		";


	}


	


	
?>