<?php

$servername = "localhost"; // Host do bando de dados.
$username = "root"; // Usuário que vai se connectar com o banco de dados
$password = ""; // Senha do usuário


      try {

                   $conn = new PDO("mysql:host=$servername;dbname=mecanica", $username, $password);
                                    
         } catch (Exception $e) {
                        
                       
                        echo $e->getMessage();
          }
    
?>