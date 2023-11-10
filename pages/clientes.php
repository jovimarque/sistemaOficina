
<?php include('../auth/verificador.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/clientes.css">
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
	
	<div  class="painelprincipal">
		<h3> Cadastro de Cliente</h3>
		<form method="POST" action="../auth/aberturaservicos.php">
			
			<input type="text" name="nome" placeholder="Nome">			
			<input type="text" name="telefone" placeholder="Telefone">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="cpf" placeholder="CPF / CNPJ">
			<!--input type="text" name="endereco" placeholder="endereço"-->
			

			<!--button type="submit" name="cadastrocliente"> Salvar dados </button-->
			<hr>
			<h1> Dados do veículo</h1>

			<input  class="veiculo" type="text" name="placa" placeholder="Placa">			
			<input class="veiculo" type="text" name="marca" placeholder="Marca">
			<input class="veiculo" type="text" name="modelo" placeholder="Modelo">
			<input class="veiculo" type="text" name="ano" placeholder="Ano">
			<input class="veiculo" type="text" name="combustivel" placeholder="Combustivel">
			<input class="veiculo" type="text" name="cor" placeholder="Cor">
			<input class="veiculo" type="text" name="km" placeholder="KM"><br>	
			
			<button type="submit" name="cadastrocliente"> Finalizar cadastro</button>

			<br>
			<textarea class="veiculo" name="diagnostico" placeholder="Diagnóstico">
				
			</textarea>
			<br>
			<button type="submit" name="cadastrar"> Inserir diagnóstico</button>
			<br>
			<input type="text" name="usuario" placeholder=" Responsável: <?php echo $_SESSION['usuario'];?>" disabled>

		</form>
	</div>

</body>
</html>