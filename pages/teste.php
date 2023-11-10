<?php

include('../auth/conexao.php');


$sql = $conn->prepare('SELECT * FROM aberturaservico');
$sql->execute();
$dados = $sql->fetchAll();

echo $dados['id'];

?>