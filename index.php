<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIF em tela inteira com Formulário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <style>
    body, html {

        background-image: linear-gradient(to bottom, white, rgba(0, 0, 255, 0.489));
      height: 100vh;
      width: 100vh; 
      
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
    .link{

     position: absolute;
     right: 7%; 

    }
  </style>
</head>
<body>
<img class="navbar-brand" src="https://tinyurl.com/ce2f7eek" alt="" style="height:10vh; width:15vh  " > 

  
  
  <div class="form-container">
    <form action="autenticacao.php" method = "POST"  >
  
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"  >Email   </label>
        <a  class="link" href="cadastro.php" > Cadastre-se </a>

        <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"><--Seja bem vindo a sua nova experiência -->.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input  name="senha" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembrar minha senha</label>
      </div>
      
      <button type="submit" class="btn btn-primary">Entrar </button>
      <a href="portofólio/autenticacao.php" style="color: blue; position:fixed; right: 10px; margin-top: 10px; "   >       Esqueci minha senha</a>
    </form>
  </div>
  <div>
  
  </div>
  




</script>
</body>
</html>
