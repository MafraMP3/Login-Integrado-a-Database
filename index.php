
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

    $resultado = $conn -> query($sql);


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
    if(isset($erro)){
        echo $erro;
    }
    ?>
</body>
</html>