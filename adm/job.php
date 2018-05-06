<?php
session_start();

include_once("seguranca.php");
include_once("conexao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>JOB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Nicolas">
    <link rel="icon" href="imagens/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/custom.min.css">
    <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>
    <?php
      include_once ("menu_job.php");


      $link = $_GET["link"];

      $pag[1] = "bem_vindo.php";
      $pag[2] = "listar_cliente.php";
      $pag[3] = "cadastrar_cliente.php";
      $pag[4] = "editar_cliente.php";
      $pag[5] = "visualizar_cliente.php";
      $pag[6] = "cadastrar_ficha_apropriacao.php";
      $pag[] = "";
      $pag[8] = "visualizar_ficha_apropriacao.php";
      $pag[9] = "editar_ficha_apropriacao.php";
      $pag[9] = "editar_ficha_apropriacao.php";
      $pag[10] = "busca_clientes.php";
      $pag[11] = "busca_ficha_apropriacao.php";
      $pag[12] = "processa/processa_apagar_ficha_apropriacao.php";
      $pag[13] = "descricao_visualiza.php";








      if(!empty($link)){

          if (file_exists($pag[$link])) {
            include $pag[$link];
          }else {
            include "bem_vindo.php";
          }
          } else{

        include"bem_vindo.php";
      }

    ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
