
<?php 
include_once('../auth/conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/finalizar.css">
	<title> CLIENTES</title>
</head>
<body>

<ul>
		<li> <a href="clientes.php">CADASTRO</a></li>
		<li> <a href="servicosteste.php">SERVIÇOS ABERTOS</a></li>
		
		
		<li> 

			<form method="POST" action="../auth/logout.php">
				<button type="submit" name="deslogar">  Sair </button>
			</form>

		</li>
		
	</ul>


    <div class="painelprincipal"> 
    <form>
     <input type="text" name="" value="">   
    </div>

</body>