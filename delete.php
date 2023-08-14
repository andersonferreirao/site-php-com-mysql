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
$conta = $_SESSION['id'];

$sql = "DELETE FROM `usuario` WHERE `id`='$conta'"; 


$delete = $conexao->prepare($sql);

if ($delete) {
    $exclui = $delete->execute();


    
    

    if ($exclui) {
        echo "<script> alert('Usuário excluído com sucesso.')
        window.location.href = 'index.php'
        </script> ";
    } else {
        echo "<script> alert('Erro ao excluir o usuário: " . $delete->error . "')
        window.location.href = 'page.php'
        </script>";
    }

    
    $delete->close();
} else {
    echo "<script> alert('Erro na preparação da consulta: " . $conexao->error . "')
    window.location.href = 'page.php'
    </script>";
}


$conexao = null;
?>

</body>
</html>