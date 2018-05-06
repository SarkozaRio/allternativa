<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$id = $_GET["id"];
	



	$sql = "DELETE FROM ficha_apropriacao  WHERE id='$id'";
    

	 $result = $pdo->prepare($sql);

	$result->execute();

	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=5&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha apropriação apagado com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Allternativa/adm/job.php?link=5&id'>
			<script type=\"text/javascript\">
				alert (\"Ficha apropriação não foi apagada\");
			</script>


		";


	}


	
?>