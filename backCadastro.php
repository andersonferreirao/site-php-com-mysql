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
<button  ></button>
<?php
include ("conection.php");


$nome_cadastro = $_POST['nome_form'];

$email_cadastro = $_POST['email_Form'];

$senha_cadastro = hash('sha256',$_POST['senha_Form']);

$endereco_cadastro = $_POST['endereco'] ;  

$telefone_cadastro = $_POST['telefone'];

$estado_cadastro = $_POST['estado'];

$cep_cadastro = $_POST['cep'];

$cidade_cadastro = $_POST['cidade'];


  


$sql = "INSERT INTO `usuario`(`id`, `nome`, `senha`, `email`, `endereco`, `telefone`, `cep`, `estado` , `cidade`) 
VALUES (null,'$nome_cadastro','$senha_cadastro','$email_cadastro','$endereco_cadastro',
'$telefone_cadastro','$cep_cadastro','$estado_cadastro' ,'$cidade_cadastro')";

$banco = $conexao->query($sql);



if($banco){
  session_start();
$_SESSION['idAtual'] = $conexao->lastInsertId();


echo"
<script>
    window.onload = function() {
        alert('login realizado com sucesso');
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