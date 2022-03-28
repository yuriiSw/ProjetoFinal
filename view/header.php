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
    <title>SISTEMY CASAS PAULISTA</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="indexAdm.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuários
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../view/cadusuario.php">Cadastrar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
  
                            <li><a class="dropdown-item" href="../view/visuUsuCodigo.php">Pesquisar por Código</a></li>
                            <li><a class="dropdown-item" href="../view/visuUsuNome.php">Pesquisar por Nome</a></li>
                            <li><a class="dropdown-item" href="../view/visuUsuEmail.php">Pesquisar por E-mail</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jogos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../view/cadastroJogo.php">Cadastrar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../view/visuJogoGenero.php">Pesquisar por Gênero</a></li>
                            <li><a class="dropdown-item" href="../view/visuJogoCod.php">Pesquisar por Código</a></li>
                            <li><a class="dropdown-item" href="../view/visuJogoNome.php">Pesquisar por Nome</a></li>
                            
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>