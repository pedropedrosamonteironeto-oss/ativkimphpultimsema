<?php

require("conexao.php");

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "DELETE FROM usuario WHERE id =$id";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Registro excluido com sucesso!');</script>":

        echo
        "<script>window.location.href='consulta.php';</script>";

        ppzin

    } else {
         
        echo "Erro ao excluir:". 
       mysqli_error($conn);
    }

   } else {

    echo "ID não informado.";

   }

   ?>
