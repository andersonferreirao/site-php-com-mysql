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
height: 100%;
width: 100%; 

}


.form-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
     
    }

    .form-container form {
      margin: 0;
    }


</style>


</head>
<body>
<?php
session_start();




?>

<nav class="navbar navbar-light bg-light">
  
<div class="container-fluid">
  <a class="navbar-brand" href="#" style="color:green" >
    <img class="navbar-brand" src="https://tinyurl.com/ce2f7eek" alt="" style="height:8vh; width:13vh; position:absoluted " >
    <?php echo $_SESSION['nome']; ?></a>
    
    <button class="btn btn-outline-success" ><a href="page.php" style="color:black" >Voltar</a></button>
</div>
</nav>



<form class="form-container" action="edit.php" method="post"  >
  <div class="form-row">
  <div class="form-group col-md-6">
  <h2>Edição de cadastro</h2>
    
  <label for=""> Usuário </label> 
  <input  class="form-control" name="nome" type="text" value="<?php echo $_SESSION['nome']; ?>" >
  </div>
  <div class="form-group col-md-6"> 
  
    <label for="inputEmail4">Email</label>
      <input  name="email"  type="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input  name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha" value="<?php echo $_SESSION['senha_original']  ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input  name="endereco" type="text" class="form-control" id="inputAddress"   value="<?php echo $_SESSION['endereco']; ?>" >
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">Telefone</label>
    <input  name="telefone" type="text" class="form-control" id="inputAddress2" placeholder="(xx)xxxxx-xxxx"  value="<?php echo $_SESSION['telefone']; ?>" >
  </div>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input  name="cidade" type="text" class="form-control" id="inputCity" value="<?php echo $_SESSION['cidade']; ?>" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select name="estado" id="inputEstado" class="form-control">
    <?php echo "<option selected>{$_SESSION['estado']}</option>"; ?>
        <option> MG </option>
        <option> SP </option>
        <option> BA </option>
        <option> PA </option>
        <option> MA </option>
        <option> DF </option>
        <option> AM </option>
        <option> RS </option>
        <option> MT </option>
        <option> MS </option>
        <option> RN </option>
        <option> AP </option>
        <option> PR </option>
        <option> RJ </option>
        <option> ES </option>
        
    
    </select>
    </div>

    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input  name="cep"  type="text" class="form-control" id="inputCEP" value="<?php echo $_SESSION['cep']; ?>" >
    </div>
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceito a política de privacidade

    </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Editar
  
  </button>
   
</form>



</body>
</html>