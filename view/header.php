<?php
include_once("../model/usuarioModel.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagem/png" href="img/icon2.png" /> <!--ICON DA PGN-->

    <title>SISTEMY CASAS PAULISTA</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../view/indexAdm.php">HOME</a>
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Usuarios</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="../view/cadusuario.php">Cadastrar</a></li>
              <li><a class="dropdown-item" href="../view/visuUsuCod.php">Pesquisar por Código</a></li>
              <li><a class="dropdown-item" href="../view/visuUsuNome.php">Pesquisar por Nome</a></li>
              <li><a class="dropdown-item" href="../view/visuUsuEmail.php">Pesquisar por E-mail</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="../view/cadproduto.php">Cadastrar</a></li>
              <li><a class="dropdown-item" href="../view/visuProdCod.php">Visualizar produto por Código</a></li>
              <li><a class="dropdown-item" href="../view/visuProdNome.php">Visualizar produto por Gênero</a></li>
              <li><a class="dropdown-item" href="../view/visuProdCategoria.php">Visualizar produto por Categoria</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
