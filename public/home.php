<?php	

 session_start();

 if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
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
  <a href="logout.php">Sair</a>

</body>
</html>