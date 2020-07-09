<?php
    include ('_templates/header.php');
    //Incluindo o menu de navegação
?>
<main class="mt-0 mb-4" role="main">
    <article role="article">
        <div class="container">
            <div class="row">
                <aside class="index-principal" role="complementary">
                    <div class="col-lg-4 col-md-4 col-md-4 mt-5">
                        <section>
                            <h1 class="text-center mt-5" role="heading">
                                <a href="quem-somos.php">
                                    <h2 class="" role="heading" aria-level="1"> Das Ruas para Web </h2>
                                </a>
                            </h1>
                            <p class="text-left mb-5">
                                Portal sobre <strong>GRAFITE</strong> desenvolvido pelos estudantes do curso sistemas para internet da FATEC São Roque, o grupo é composto por cinco integrantes: Adelina, Anderson, Igor, Larissa e Matheus.
                            </p>
                        </section>
                        <section>
                            <h2 class="text-left mt-5" role="heading" aria-level="1"> Grafite no Mundo </h2>
                            <p class="text-left">
                                Ao redor do mundo é possível observar grandes artistas que levam a sério a arte de rua e transformam “lugares normais” em verdadeiras telas.<a href="grafite-no-mundo.php"> Confira! </a>
                            </p>
                        </section>
                    </div>

                    <div class="col-lg-4 col-md-4 mt-5">
                        <div class="col-lg-9 offset-lg-2 col-md-12 mt-md-5">
                            <a href="grafite-x-sociedade.php">
                                <img class="img-fluid rounded col-12" src="./_images/grafite-x-sociedade/hellsKit1970s.jpg" alt="Grafite feito em Hells Kit em 1970">
                                <h2 class="text-center txtimg" role="heading">O que é o Grafite ?</h2>
                            </a>
                        </div>

                        <div class="col-lg-9 offset-lg-2 col-md-12 mt-md-5">
                            <a href="historia-do-grafite.php">
                                <img class="img-fluid rounded col-12" src="./_images/historia-do-grafite/grafite1982.jpg" alt="Um dos primeiros Grafites da cidade de São Paulo">
                                <h2 class="text-center txtimg" role="heading"> História do Grafite </h2>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 mt-5">
                        <div class="col-lg-9 offset-lg-2 col-md-12 mt-md-5">
                            <a href="mitos-e-verdades.php">
                                <img class="img-fluid rounded col-12" src="./_images/mitos-e-verdades/pichacao-centro-bh.jpg" alt="Pichação no centro da cidade de Belo Horizonte">
                                <h2 class="text-center txtimg" role="heading"> Pichação é crime! </h2>
                            </a>
                        </div>

                        <div class="col-lg-9 offset-lg-2 col-md-12 mt-md-5">
                            <a href="grafite-no-mundo.php">
                                <img class="img-fluid rounded col-12" src="./_images/grafite-no-mundo/kobra.jpg" alt="Grafite feito pelo artista Eduardo Kobra">
                                <h2 class="text-center txtimg" role="heading"> Grafite no Mundo </h2>
                            </a>
                        </div>

                    </div>
                </aside>
            </div>

            <div>
                <h2 class="text-left" role="heading">News</h2>
                <div class="row m-1">
                    <div class="col-sm-6">
                        <div class="row m-1">
                            <div class="col-md-12 col-lg-6">
                                <a href="news.php">
                                    <img src="./_images/news/museuderua.jpg" class="d-block w-100 roudend img-fluid" alt="Projeto Museu de Rua BH">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news text-center" role="heading">Museu de Rua</h3>
                                <p class="text-left">
                                    Uma iniciativa inédita de um coletivo de produtores culturais e artistas irá transformar ruas, praças e avenidas de Belo Horizonte em um galeria de arte a céu aberto. Neste sábado (7), das 10h às 19h, será a estreia do Museu de Rua!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row m-1">
                            <div class="col-md-12 col-lg-6">
                                <a href="news.php">
                                    <img class="d-block w-100 roudend img-fluid" src="./_images/news/osgemeos.jpg" alt="Irmãos Gustavo e Otávio Pandolfo na Pinacoteca" />
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news" role="heading">Os Gêmeos na Pinacoteca em 2020</h3>
                                <p class="text-left">
                                    Os Gêmeos, grafiteiros brasileiros que conquistaram todo o mundo com sua street art conquistaram um espaço para terem suas obras expostas na galeria da Pinacoteca.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="">
                    <h2 class="text-left mt-5 mb-3" role="heading">Artistas</h2>
                    <div class="row m-1">
                        <div class="col-3">
                            <figure>
                                <a href="_authors/larissa/index.php"> <img src="./_images/larissa/aryzperfil.jpg" alt=" Artista Aryz" class="img-fluid rounded img-thumbnail"> </a>
                                <figcaption>
                                    <strong>Aryz</strong>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <a href="_authors/larissa/index.php"><img src="./_images/anderson/artista-1.png" alt="Real Grapixo" class="img-fluid rounded img-thumbnail"></a>
                                <figcaption>
                                    <strong>Real Grapixo</strong>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <a href="_authors/adelina/index.php"><img src="./_images/adelina/TracyLeeStumperfil.jpg" alt="Artista Tracy Lee Stum" class="img-fluid rounded img-thumbnail"></a>
                                <figcaption>
                                    <strong>Tracy Lee Stum</strong>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <a href="_authors/adelina/index.php"><img src="./_images/matheus/izolag.jpg" alt="Artista Izolag" class="img-fluid rounded img-thumbnail"></a>
                                <figcaption>
                                    <strong>Izolag</strong>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-left mt-4 mb-4" role="heading">Estilos</h2>
                    <div class="row mt-4">
                        <div class="col-lg-3 offset-lg-2 col-md-3 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1 mb-4">
                            <div class="card">
                                <a href="_authors/igor/index.php" arial-label="Link para o estilo Free Style">
                                    <img class="card-img-top rounded" src="_images/estilos/freestyle.png" alt="Imagem capa Grafite Freestyle">
                                    <div class="card-body">
                                        <p class="card-text text-right">
                                            <strong>Saiba mais</strong>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1 col-md-3 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1 mb-4">
                            <div class="card">
                                <a href="_authors/anderson/index.php">
                                    <img class="card-img-top rounded" src="_images/estilos/throwup.png" alt="Imagem capa Grafite Throwup">
                                    <div class="card-body">
                                        <p class="card-text text-right">
                                            <strong>Saiba mais</strong>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-3 offset-lg-1 col-md-3 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
                            <div class="card">
                                <a href="_authors/matheus/index.php">
                                    <img class="card-img-top rounded" src="_images/estilos/stencil.png" alt="Imagem capa Grafite Stencil">
                                    <div class="card-body">
                                        <p class="card-text text-right">
                                            <strong>Saiba mais</strong>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1 col-md-3 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
                            <div class="card">
                                <a href="_authors/larissa/index.php">
                                    <img class="card-img-top rounded" src="_images/estilos/mural.png" alt="Imagem capa Grafite Mural">
                                    <div class="card-body">
                                        <p class="card-text text-right">
                                            <strong>Saiba mais</strong>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1 col-md-3 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
                            <div class="card">
                                <a href="_authors/adelina/index.php">
                                    <img class="card-img-top rounded" src="_images/estilos/3d.png" alt="Imagem capa Grafite  3D">
                                    <div class="card-body">
                                        <p class="card-text text-right">
                                            <strong>Saiba mais</strong>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </article>
</main>

<?php
    include ('_templates/footer.php');
    //Incluindo o rodapé
?>