<hr>

<h4>  Usuarios cadastrados  </h4>

<table border="1" cellpadding="10">
    
 <tr>
    <th>ID</th>
    <th> Usuario</th>
    <th>Senha</th>

 </tr>

 <?php
    // define a variavel $sqlUsuarios como o resultado da instrução sql
    $sqlUsuarios = "SELECT * FROM usuario";

    // transforma o $sqlusuario em um array associativo para o php entender, na forma da variavel $resultadoUsuarios.
    $resultadoUsuarios = $conn -> query($sqlUsuarios);

    // percorre e exibe registros do banco de dados na forma de uma tabela
    while ($linha = $resultadoUsuarios->fetch_assoc()){
        echo"<tr>

            <td>" . $linha["id"] . "</td>
            <td>" . $linha["usuario"] . "</td>
            <td>" . $linha["senha"] . "</td>


        </tr>";

    }
?>


</table>