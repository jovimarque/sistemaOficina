<?php

include('../auth/verificador.php');
include('../auth/conexao.php');




if(isset($_GET['id'])){

$id = $_GET['id'];

$sql=$conn->prepare("SELECT placa,marca,modelo FROM veiculos WHERE id = :id");
$sql->bindParam(':id',$id);
$sql->execute();

$dados = $sql->fetch();

	

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<title> PAINEL</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<ul>
		<li> <a href="clientes.php">CADASTRO</a></li>
		<li> <a href="servicosteste.php">SERVIÇOS ABERTOS</a></li>
		<!--li> <a href="admin.php">VERIFICAÇÃO DE SERVIÇO</a></li-->
		
		<li> 

			<form method="POST" action="../auth/logout.php">
				<button type="submit" name="deslogar">  Sair </button>
			</form>

		</li>
		
	</ul>
	
	<div  class="painelprincipal">
		<h3> Formulário Abertura de Serviço</h3>
			
		<form method="POST" action="../auth/aberturaservicos.php">


			<?php
				if(isset($_GET['id'])){
			?>
			
			<input type="text" name="placa" placeholder="Placa" value="<?php  echo $dados['placa']; ?> ">			
			<input type="text" name="marca" placeholder="Marca" value="<?php   echo $dados['marca']; ?>">
			<input type="text" name="modelo" placeholder="Modelo" value="<?php echo $dados['modelo'] ?> ">

			<?php
				}else{
			?>
				
			<input type="text" name="placa" placeholder="Placa">			
			<input type="text" name="marca" placeholder="Marca">
			<input type="text" name="modelo" placeholder="Modelo">

			<?php
				
				}

			}//if


			?>
	
			<h3> Informações de Serviço</h3>
			<input type="text" name="servico" placeholder="Informações sobre serviço" value="<?php ?>">
			<div id="formulario">
			
			<h3> Informações de peças</h3>
				
	  
            <div id="formulario">
                <div class="form-group">
                  
                    <input type="text" name="peca" placeholder="Nome da peça"> <input type="text" name="valor" placeholder="Valor">
                    <button type="button" id="add-campo"> + </button>
                </div>
            </div>
            
        

        <script>
        	/*	

        	ESTA FUNÇÃO JQUERY ADICIONA E REMOVE CAMPO DE INPUT

        	*/
            var cont = 1;
            //https://api.jquery.com/click/
            $('#add-campo').click(function () {
                cont++;
                //https://api.jquery.com/append/
                $('#formulario').append('<div class="form-group" id="campo' + cont + '"><input type="text" name="peca_adicional" placeholder="Nome da peça"><input type="text" name="valor" placeholder="Valor"> <button type="button" id="' + cont + '" class="btn-apagar"> - </button></div>');
            });

            $('form').on('click', '.btn-apagar', function () {
                var button_id = $(this).attr("id");
                $('#campo' + button_id + '').remove();
            });
        </script>
	
			
		

			</div>	
			<br>
			<h3> Informações adicionais</h3>	
			<textarea name="observacoes" placeholder=" Observações">
				
			</textarea>
			<br>
			<button type="submit" name="cadastrar"> Abrir Serviço</button>
			<br>
			<input type="text" name="responsavel" placeholder=" Responsável: <?php echo $_SESSION['usuario']; ?>" disabled>

		</form>
	</div>

</body>
</html>

    