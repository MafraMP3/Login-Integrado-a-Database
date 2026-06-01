<?php	
 
 include("../infra/db/connect.php");

 if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $_usuario = $_POST ["usuario"];
  $_senha = $_POST ["senha"];

  $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', $senha) ";
  if($conn -> query($sql) == TRUE){
     echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
        }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        }
      }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

 <H2> Bem vindo, <?php echo $_SESSION["usuario"];?>.</H2>

    <h2>Cadastrar usuario</h2>

    <form method="POST">

    <label for="usuario">Usuario</label>
    <input type="text" name="usuario">
    <br>
    <br>
    <label for="senha">Senha</label>
    <input type="password" name="senha">
    <br>
    <br>
    <button type="submit">Enviar</button>

    </form>

  <a href="logout.php">Sair</a>

</body>
</html>