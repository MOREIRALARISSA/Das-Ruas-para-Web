<?php 
    $url = explode("/", $_SERVER['REQUEST_URI']);
    $resultado = in_array('_authors', $url);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo !$resultado ? "" : "../../" ;?>_images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_css/bootstrap.css">
    <!-- <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/adelina/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/anderson/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/igor/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/larissa/_css/style.css">
    <link rel="stylesheet" class="nav-link disabled" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/matheus/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_css/style.css">
    <title> Das Ruas para Web </title>
</head>

<body>
    <header class="stp menu_fixed colorh">
        <nav class="navbar navbar-light colorh">
            <a href="<?php echo !$resultado ? "" : "../../" ;?>index.php">
                <div class="col-xl-10 offset-xl-1 col-lg-9 offset-lg-1 col-md-9 offset-md-1 col-sm-9 col-7 text-center d-sm-none d-md-block d-none">
                    <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>_images/logotipo.png" alt="Logotipo do site Das Ruas para Web - " />
                </div>
                <div class="col-xl-9 offset-xl-0 col-lg-9 offset-lg-1 col-md-9 offset-md-1 col-sm-9 col-9 text-center d-md-none d-lg-none d-sm-block">
                    <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>_images/logotipo_mobile.png" alt="Logotipo do site Das Ruas para Web" />
                </div>
            </a>

            <button class="navbar-toggler bg-light tam-hamburguer" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse bg-light navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mx-auto menu-estilos">
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>index.php">
                            Home<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>historia-do-grafite.php">
                            História do Grafite
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>grafite-no-mundo.php">
                            Grafite no Mundo
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>mitos-e-verdades.php">
                            Mitos e Verdades
                        </a>
                    </li>
                    <li  role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>grafite-x-sociedade.php">
                            Grafite X Sociedade
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="btn btn-light btn-group justify-content-center">
                            <button class="btn bg-light btn-light btn-sm botao-drop" type="button">
                                <a href="<?php echo !$resultado ? "" : "../../" ;?>estilos.php" class="btn btn-light btn-sm">Estilos</a>
                            </button>
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split botao-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/igor/index.php">Freestyle</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/anderson/index.php">Throwup</a>
                                <a class="dropdown-item disabled" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/matheus/index.php">Stencil</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/larissa/index.php">Mural</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/adelina/index.php">3D</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a role="menuitem" class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>news.php">
                            News
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>contato.php">
                            Contato
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>quem-somos.php">
                            Quem Somos
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>normas-de-utilizacao.php">
                            Normas de Utilização
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>