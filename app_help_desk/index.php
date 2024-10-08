<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Help Desk</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    #btn{
      width: 100%;
      margin-top: 25px;
    }
    .card-login {
      padding: 60px 0 120px 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="assets/astronauta.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>
  </header>
  <main class="py-4 ">
    <div class="container">
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body py-4">
              <form action="valida_login.php" method="post">
                <div class="form-group py-4">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>
                <?php } ?>

                <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                  <div class="text-danger">
                    Faça login antes de acessar as páginas protegidas
                  </div>
                <?php } ?>
                <button id="btn" class="btn btn-md btn-info gap-2" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </main>
  <footer class="text-center py-2 ">
    <div class="container">
      <p>&copy; 2024 Desenvolvido por Guilherme.</p>
    </div>
  </footer>
</body>

</html>