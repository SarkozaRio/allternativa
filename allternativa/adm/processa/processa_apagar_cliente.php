<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$id = $_GET["id"];
	



	$sql = "DELETE FROM clientes  WHERE id='$id'";
    

	 $result = $pdo->prepare($sql);

	$result->execute();

	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Cliente apagado com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Allternativa/adm/job.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Cliente não foi apagado\");
			</script>


		";


	}


	
?>