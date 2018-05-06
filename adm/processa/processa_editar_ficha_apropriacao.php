<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$id = $_POST["id"];
	$titulo = $_POST["titulo"];
	
	
	
	$sql = "UPDATE ficha_apropriacao SET  titulo='$titulo', modified=NOW() WHERE id='$id'";
    

	 $result = $pdo->prepare($sql);

	$result->execute();

	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=8&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha atualizada com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Allternativa/adm/job.php?link=8&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha não foi atualizada.\");
			</script>


		";


	}


	
?>