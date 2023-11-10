<?php

    include('../auth/conexao.php');

    $sql = $conn->prepare('SELECT * FROM veiculos');
    $sql->execute();
    $resultado = $sql->fetchAll();

?>



<?php include('../auth/verificador.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/servicoteste.css">
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
	

    <table>
        <tr>

            <th>#</th>
            <th>CLIENTE</th>
            <th>PLACA</th>
            <th>MODELO</th>
            <th>GERENCIAR</th>
    
        </tr>  
       <?php
        foreach($resultado as $dados){
       ?> 
        <tr>    
                <td><?php echo $dados['id'];?></td>
                <td><?php echo $dados['cliente_id'];?></td>
                <td><?php echo $dados['placa'];?></td>
                <td><?php echo $dados['modelo'];?></td>
                
                <td>

                <a href="admin.php?id=<?php echo $dados['id']?>">Revisão</a>
                <a href="finalizar.php?id=<?php echo $dados['id']?>">| Finalizar</a>

                </td>

        </tr>

       <?php
        }
       ?> 
    </table>


</body>
</html>