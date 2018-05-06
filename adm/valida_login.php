<?php
		session_start();

			$usuariot = $_POST['usuario'];
			$senhat = $_POST['senha'];

			include_once("conexao.php");

			//$result = mysql_query("SELECT * FROM usuarios WHERE login = '$usuariot' AND senha = '$senhat' LIMIT 1");

			//$resultado = mysql_fetch_assoc($result);

			$result = $pdo->prepare("SELECT * FROM usuarios WHERE login = '$usuariot' AND senha = '$senhat' LIMIT 1");

			$result->execute();

			$resultado = $result->fetch(PDO::FETCH_ASSOC);

			//echo "Usuário: ".$resultado['nome'];

			if (empty($resultado)) {
				//mensagem erro
				$_SESSION['loginErro'] = "Usuário ou senha inválido";
				//manda usuário para tela login
				header("Location: login.php");
			} else {
			//define os valores atribuidos na sessao do usuário
			$_SESSION['usuarioID'] = $resultado['id'];	
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
			$_SESSION['usuarioLogin'] = $resultado['login'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];


			if ($_SESSION['usuarioNivelAcesso'] == 1 || $_SESSION['usuarioNivelAcesso'] == 7) {
				header("Location: administrativo.php");
			}

			if ($_SESSION['usuarioNivelAcesso'] == 2 || $_SESSION['usuarioNivelAcesso'] == 3 || $_SESSION['usuarioNivelAcesso'] == 4 || $_SESSION['usuarioNivelAcesso'] == 5 || $_SESSION['usuarioNivelAcesso'] == 6) {
				header("Location: job.php");
			}

      	 	
     		 }


			
?>

