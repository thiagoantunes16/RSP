<?php
session_start();

if(isset($_SESSION['idUser'])){
  header('Location: avisologado.php');
}
else{
?>
<!DOCTYPE html>
<!-- saved from url=(0059)https://getbootstrap.com/docs/4.4/examples/floating-labels/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="icon" href="../../img/logoifhub.png">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/floating-labels.css">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .error {
        color:#856404; 
        background-color:#fff3cd;
        position:relative;
        padding:.75rem 1.25rem;
        margin-bottom:1rem;
        border-radius:.25rem;
      }
    </style>
  </head>
  <body>
    <form class="form-signin" method="POST" action="processalogin.php">
  <div class="text-center mb-4">
    <a href="../index.php"><img class="mb-4" src="../../img/logoifhub.png" alt="Aqui vai a logo do site (img)" width="72" height="72" title="Voltar para a página inicial"></a>
    <!-- <h1 class="h3 mb-3 font-weight-normal">iFTO Hub</h1> -->
    <p>Colocar um texto interessante aqui.</p>
  </div>
  <?php
      if(isset($_SESSION['erro'])){
        if($_SESSION['erro'] == true){
      ?>
      <div class="alert alert-danger text-center" role="alert">
        <p>Erro ao efetuar login!</p>
        <p>e-mail ou senha estão incorretos.</p>
      </div>
      <?php
        }
      }
      unset($_SESSION['erro']);
      ?>
  <div class="form-group">
    <span><img src="../../icons/envelope.svg" alt="email icon" height="32" width="32"></span>
    <label for="logemail">Email</label>
    <input type="email" name="logemail" class="form-control" required autofocus title="Digite seu e-mail utilizado no cadastro">
  </div>
  <div class="form-group">
    <span><img src="../../icons/lock.svg" alt="password icon" height="32" width="32"></span>
    <label for="logsenha">Senha</label>
    <input type="password" name="logsenha" class="form-control" required title="Digite sua senha utilizada no cadastro">
  </div>
  <button class="btn btn-lg btn-block" type="submit" title="Logar">Autenticar</button>
  <a href="../Cadastro/cadastro.php"  title="Ir para a página de cadastro" class="btn btn-lg btn-block">Primeiro Acesso</a>
  <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
</form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
  <script src="../../js/login.js"></script>
</body></html>
<?php
}
?>