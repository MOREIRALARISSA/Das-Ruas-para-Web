<?php 
    $url = explode("/", $_SERVER['REQUEST_URI']);
       $resultado = in_array('_authors', $url);
//    if (!$resultado) {
//        $cssPath = "_css/";
//    } else {
//        $cssPath = "../../";
//    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo !$resultado ? "" : "../../" ;?>img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_css/bootstrap.css">
    <!-- <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/adelina/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/anderson/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/igor/css/_style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/larissa/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/matheus/_css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>_css/style.css">
    <title> Title </title>

</head>

<body>
    
    <header>
        
            <nav class="navbar navbar-dark bg-dark justify-content-end">
            
            <!-- img header --> 
            <img src="<?php echo !$resultado ? "" : "../../" ;?>_images/logoresponsive.png" class="img-fluid" alt="Responsive image">

            
                <!--  <a class="navbar-brand" href="#">Navbar</a>-->
                <button class="navbar-toggler tam-hamburguer" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto menu-estilos">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>index.php">Home<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo !$resultado ? "" : "../../" ;?>historia-do-grafite.php">História do
                                Grafite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo !$resultado ? "" : "../../" ;?>grafite-no-mundo.php">Grafite no
                                Mundo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo !$resultado ? "" : "../../" ;?>mitos-e-verdades.php">Mitos
                                e Verdades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo !$resultado ? "" : "../../" ;?>grafite-x-sociedade.php">Grafite X
                                Sociedade</a>
                        </li>

                        <!-- Example split danger button -->
                        <!-- <div class="btn-group dropright justify-content-end">
                            <a href="<?php echo !$resultado ? "" : "../../" ;?>_authors/anderson/index.php" class="btn btn-secondary btn-sm">Estilos</a>
                            <button type="button" id="dropdownMenuLink" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Dropright dividido</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/igor/index.php">Freestyle</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/anderson/index.php">Throwup</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/matheus/index.php">Stencil</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/larissa/index.php">Mural</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/adelina/index.php">3D</a>
                            </div>
                        </div> -->

                        <div class="btn-group justify-content-end">
                            <button class="btn btn-secondary btn-sm botao-drop" type="button">
                            <a href="<?php echo !$resultado ? "" : "../../" ;?>estilos.php" class="btn btn-secondary btn-sm">Estilos</a>
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split botao-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/igor/index.php">Freestyle</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/anderson/index.php">Throwup</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/matheus/index.php">Stencil</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/larissa/index.php">Mural</a>
                                <a class="dropdown-item" href="<?php echo !$resultado ? "" : "../../" ;?>_authors/adelina/index.php">3D</a>
                            </div>
                        </div>


                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo !$resultado ? "" : "../../" ;?>quem-somos.php">Quem
                                Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo !$resultado ? "" : "../../" ;?>normas-de-utilizacao.php">Normas de
                                Utilização</a>
                        </li>

                        <!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
-->
                    </ul>
                </div>
            </nav>

        </header>
        <div class="container">