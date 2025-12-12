<?php

require("conexao.php");

$id = $_POST['id'];

$nome = $_POST["nome"];

$ano = $_POST["ano"];

$idade = $_POST["idade"];

$sql = "UPDATE usuario

  SET nome = '$nome', ano = '$ano', idade = '$idade'
  
  WHERE id = $id";

  if (mysqli_query($conn, $sql)) {

    echo "<script>alert('Registro atualizado com sucesso!);</script>";

    echo
    "<script>window.location.href='consulta.php';</script>";

  } else {

    echo "Erro ao atualizar:" . mysqli_error($conn);

  }

  ?>

  