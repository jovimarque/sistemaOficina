<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/login.css">
   <title> Login </title>
</head>
<body>


      <form method="POST" action=" auth/autenticador.php">
         <h4> PAINEL</h4>
         <input type="text" name="login">
         <input type="password" name="senha">
         <button type="submit" name="entrar"> Entrar </button>

         <?php

            if(isset($_GET['erro'])){

               echo " <h4 style='text-align:center;'> Login ou senha inválidos </h4>";
            }

         ?>

         </form>


</body>
</html>