<?php

$host = 'localhost';

$usuario = 'root';

$senha = '';

$banco = 'agenda';

$conn = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conn) {

    die('Erro na conexão'. mysqli_connect_erro());

} else {

}

?>
