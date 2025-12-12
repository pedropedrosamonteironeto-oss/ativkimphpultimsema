<?php

require ("conexao.php");

$consulta = "SELECT * FROM usuario";

$registros = mysqli_query($conn, $consulta);

if(mysqli_num_rows($registros)>0) {

    echo "h2>Lista de Usuário</h2>";

    echo "<table border='1' cellpadding='0' cellspacing='0'>";

    echo "<tr>"

    ."<th>ID</th>"

    ."<th>Nome</th>"

    ."<th>Ano de Nascimento</th>"

    ."<th>Idade</th>"

    ."</tr>";

    while($linha = mysqli_fetch_assoc($registros)) {

        echo "<tr>"

        ."<td>".$linha['id']."</td>"

        ."<td>".$linha['nome']."</td>"

        ."<td>".$linha['ano']."</td>"

        ."<td>".$linha['idade']."</td>";

        echo "<td>

        <a href='excluir.php?id=".$linha['id']."'

        onclick='return confirm(\"Tem certeza que deseja excluir?\");'>

        <button>Excluir</button></a>

        </td>";

        echo "</tr>";
        
    }

    echo "</table>";

}

else {

    echo"Nenhum registro encontrado.";

}

?>


    
