<?php 
	session_start();
	//verifica se  os dados de sessão estão válidos
	if(!isset($_SESSION['logado'])){
  	header("Location: ../index.php?session");
 	}
