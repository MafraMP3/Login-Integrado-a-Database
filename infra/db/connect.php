<?php
session_start(); // inicia a sessão

//define as variaveis do banco de dados
$host = "localhost";
$user = "root";
$pass = "root";
$db = "sistema_simples_mafra";
$conn = new mysqli($host,$user,$pass,$db);


// if para verificar se a conexão foi realizada.
if($conn->connect_error){
    die("Erro na conexão");
}else{
    echo ("<p> BD: ok </p>");
}
?>