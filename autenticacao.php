<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
 body, html {

background-image: linear-gradient(to bottom, white, rgba(0, 0, 255, 0.489));
height: 100vh;
width: 100vh; 

}
</style>
</head>
<body>

<?php
include("conection.php");
session_start();

$email = $_POST['email'];
$senha = hash('sha256',$_POST['senha']);

$_SESSION['senha_original'] = $_POST['senha'];

$sql = "SELECT * FROM `usuario` WHERE `email` = '$email'and `senha` = :senha ";

$select = $conexao->prepare($sql);
$select->bindParam(':senha', $senha);
$select->execute();

if($consulta = $select->fetch(PDO::FETCH_ASSOC)){
    $_SESSION['nome'] = $consulta['nome'];
     $_SESSION['endereco'] = $consulta['endereco'];
     $_SESSION['telefone'] = $consulta['telefone'];
      $_SESSION['cep'] = $consulta['cep'];
      $_SESSION['estado'] = $consulta['estado'];
     $_SESSION['email'] = $consulta['email'];
     $_SESSION['cidade'] = $consulta['cidade'];
     $_SESSION['id'] = $consulta['id'];
     
    echo"
    <script>
    window.onload = function() {
        alert('login realizado com sucesso');
        redirecionarPagina();
    }

    function redirecionarPagina() {
        window.location.href = 'page.php'
    }
</script>

";
}else{
    echo " 
    <script>
    window.onload = function() {
        alert('Erro no login');
        redirecionarPagina();
    }

    function redirecionarPagina() {
        window.location.href = 'index.php'
    }
</script>

    ";
  
}






?>

</body>
</html>