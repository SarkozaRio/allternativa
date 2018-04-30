<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$titulo = $_POST["titulo"];
	$data = $_POST["data"];
	
	



	$data = $_POST["data"];
	$sql = "INSERT INTO ficha_apropriacao (titulo, data, created) VALUES ('$titulo','$agencia', NOW())";
    

	 $result = $pdo->prepare($sql);

	$result->execute();



	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha de Apropriação criada com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha de Apropriação não foi criada.\");
			</script>


		";


	}


	


	
?>