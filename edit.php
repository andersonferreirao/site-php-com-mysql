<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("conection.php");
session_start();

$id = $_SESSION['id']; 

$senha = hash('sha256',$_POST['senha']);
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$sql = "UPDATE `usuario` SET `id`='$id',`nome`='$nome',`senha`='$senha',`email`='$email',
`endereco`='$endereco',`telefone`='$telefone',`cep`='$cep',`estado`='$estado',`cidade`='$cidade' WHERE `id`='{$_SESSION['id']}'";

$upd = $conexao->query($sql);
if ($upd) {

    echo " <script>
    window.onload = function() {
        alert('atualização realizada com sucesso');
        redirecionarPagina();
    }

    function redirecionarPagina() {
        window.location.href = 'page.php'
    }
</script>";
$_SESSION['nome'] = $nome;
     $_SESSION['endereco'] = $endereco;
     $_SESSION['telefone'] = $telefone;
      $_SESSION['cep'] = $cep;
      $_SESSION['estado'] = $estado;
     $_SESSION['email'] = $email;
     $_SESSION['cidade'] = $cidade;
     $_SESSION['id'] = $id;

} else {
    echo " <script>
    window.onload = function() {
        alert('Erro na atualização');
        redirecionarPagina();
    }

    function redirecionarPagina() {
        window.location.href = 'editar.php'
    }
</script>
" . $conexao->errorInfo();
}


$conexao = null;
?>




</body>
</html>