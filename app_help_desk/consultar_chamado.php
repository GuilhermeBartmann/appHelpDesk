<?php require_once "validador_acesso.php"; ?>

<?php
$chamados = array();

$arquivo = fopen('arquivo.hd', 'r');

while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  $chamados[] = $registro;
}

fclose($arquivo);
?>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Help Desk</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
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
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>

            <div class="card-body">

              <?php foreach ($chamados as $chamado) { ?>
                <?php
                $chamado_dados = explode('#', $chamado);

                if (count($chamado_dados) < 3) {
                  continue;
                }
                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?= $chamado_dados[0] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><? $chamado_dados[1] ?></h6>
                    <p class="card-text"><?= $chamado_dados[2] ?></p>

                  </div>
                </div>
              <?php } ?>


              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
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