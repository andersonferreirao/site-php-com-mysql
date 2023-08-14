 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <style>
    body, html {

        background-image: linear-gradient(to bottom, white, rgba(0, 0, 855, 0.580));
        background-size:cover;
    
      
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

  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid" >
 <img class="navbar-brand" src="https://tinyurl.com/ce2f7eek" alt="" style="height:10vh; width:15vh  " >
  
  <a class="navbar-brand" href="#" style="color: green; border-radius:10%" ><?php echo $_SESSION['nome']; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="editar.php">Editar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Açoes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item"  onclick="excluir()" >Excluir conta</a></li>
            <li><a class="dropdown-item" href="#" >Alterar conta</a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="sair.php" tabindex="-1" style="color:red">Sair</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Preços</h1>
      <p class="lead">Construa uma tabela de preços para seus potenciais clientes, com esse exemplo Bootstrap. Além do mais, é feito com componentes padrões, utilitários e um pouquinho de customização.</p>
    </div>

    <div class="container" id="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Grátis</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 usuários</li>
              <li>2 GB de armazenamento</li>
              <li>Suporte por email</li>
              <li>Acesso ao centro de ajuda</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Cadastre-se de graça</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 usuários</li>
              <li>10 GB de armazenamento</li>
              <li>Suporte por email prioritário</li>
              <li>Acesso ao centro de ajuda</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Conhecer</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 usuários</li>
              <li>15 GB de armazenamento</li>
              <li>Suporte por email e telefone</li>
              <li>Acesso ao centro de ajuda</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Contate-nos</button>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->
<button style="display: none;" id="modal"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: red" >Excluir conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Após a exclusão da conta todos os dados da conta são perdidos.
        Tem certeza que deseja continuar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" > <a href="delete.php" style="color: white;text-decoration: none" > 
        Continuar </a></button>
      </div>
    </div>
  </div>
</div>


      <script>
        function excluir(){
          var modal = document.getElementById("modal");  
            modal.click();

        }


      </script>

</body>
</html>