<?php	
 // chama a inicialização da sessão
 include("../infra/db/connect.php");


 // verificada se o usuario está setado, se não, envia para a tela index.
 if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
 }

 // verifica se o metodo de request é post, se sim  define as variaveis usuario e senha para oque foi digitado pelo usuario.
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"] ?? "";
        $senha = $_POST["senha"] ?? "";


        if(!empty($usuario) && !empty($senha)){
  // instrução SQL INSERT INTO para as informações inseridas pelo usuario irem para o banco.
      $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', '$senha') ";
  
  // verifica se a instrução acima foi executada
  
      if($conn -> query($sql) === TRUE){
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
      }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
      }
      }

      if(isset($_POST["excluir"])) {

    $id = $_POST["excluirUsuario"];

    $sql = "DELETE FROM usuario WHERE id = $id";

    if ($conn->query($sql) === true) { //verifica se deu certo e alerta
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert('ERRO!')</script>";
        }
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
   <!-- Insere o nome do usuario logado na sessão -->
 <H2> Bem vindo, <?php echo $_SESSION["usuario"];?>.</H2>

    <h2>Cadastrar usuario</h2>
   <!-- formulario POST para cadastrar novos usuarios. -->
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
      <br>

    </form>

  <form method="POST">
    <label for="excluirUsuario">Selecione o ID para excluir o usuário</label>
      <select name="excluirUsuario" id="selectExcluir">
       <?php
         $sqlID = "SELECT id FROM usuario"; 
            $resultadoID = $conn->query($sqlID);
            while ($linha = $resultadoID->fetch_assoc()) { 
            echo "<option value=" . $linha["id"] . ">" . $linha["id"] . "</option>"; 
             }
             ?>
      </select>
      <br>
      <button type="submit" name="excluir">excluir</button> 
   </form>


    <?php
    include("../public/component/table.php"); //chama a tabela descrita na pagina table.php
    
    ?>

  <a href="logout.php">Sair</a>

</body>
</html>