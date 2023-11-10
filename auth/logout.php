<?php

/*mata a sessão*/
session_destroy();


unset($_SESSION['logado']);
unset($_SESSION['usuario']);
unset($_SESSION['id']);

header('Location: ../index.php');

