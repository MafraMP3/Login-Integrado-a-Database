
<?php
 // chama a inicialização da sessão
include("infra/db/connect.php");


//verifica se o metodo de request é post, se sim, adciona oque o usuario digitou nas areas senha e usuario como novas informações
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];


    // mostra da tabela usuario, a o usuario e a senha que foram adicionados nas variaveis
    $sql = "SELECT * FROM usuario 
    WHERE usuario = '$usuario' 
    AND senha = '$senha'";

//  comando PHP que executa uma instrução ao SQL no banco de dados, puxando o resultado do select acima para a variavel $resultado
    $resultado = $conn -> query($sql);

// verifica se o resultado do select tem mais de 0 colunas, ou seja, se o usuario existe no banco, se sim, leva ele para a pagina home, se nâo, emite um aviso de erro.
    if($resultado -> num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }

}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
    <h2>Login com PHP</h2>
    <!--  formulario POST para o usuario inserir as informações que serão analizadas  -->
    <form method="POST">

    <label for="usuario">Usuario</label>
    <input type="text" name="usuario">
    <br>
    <br>
    <label for="senha">Senha</label>
    <input type="password" name="senha">
    <br>
    <br>
    <button type="submit">Entrar</button>

    </form>

    <?php

    // verifica se a variavel erro não é nula, se for o caso, emite o erro.
    if(isset($erro)){
        echo $erro;
    }
    ?>
</body>
</html>