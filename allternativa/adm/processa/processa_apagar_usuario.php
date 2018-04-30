<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$id = $_GET["id"];
	



	$sql = "DELETE FROM usuarios  WHERE id='$id'";
    

	 $result = $pdo->prepare($sql);

	$result->execute();

	if($result) {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/allternativa/adm/administrativo.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Usuário apagado com sucesso.\");
			</script>


		";
	}else{

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Allternativa/adm/administrativo.php?link=2&id'>
			<script type=\"text/javascript\">
				alert (\"Usuário não foi apagado\");
			</script>


		";


	}


	
?>