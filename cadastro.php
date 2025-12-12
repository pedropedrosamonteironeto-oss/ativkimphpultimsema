<?php

$nome = $_POST["nome"];

$ano = $_POST["ano"];

$idade = 2025 - $ano;

require ("conexao.php");

mysqli_select_db($conn,"agenda") or die(mysqli_error("$conn"));

$inserir = "INSERT INTO usuario (nome, ano, idade) VALUES ('$nome','$ano','$idade')";

if (mysqli_query($conn, $inserir)){

    echo "Dados inseridos com sucesso!";

} else {

    echo "Erro ao inserir: ". mysqli_error($conn);

}

?>


