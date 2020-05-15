<?php
    include ('../../_templates/header.php');
    // include ('./../../header-estilos.php');
    //Incluindo o menu de navegação
?>

<main>
    <div class="jumbotron junbotrom-fluid mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 font-weight-bold">Throwup</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center my-3" id="pills-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Sobre</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Artistas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " id="nav-pills-03" data-toggle="pill" href="#nav-item-03">Galeria</a>
                        </li>
                    </ul>

                    <!-- Sobre -->
                    <div class="tab-content" id="nav-pills-content">
                        <div class="tab-pane fade show active mt-5" id="nav-item-01" role="tabpanel">
                            <h1 class="mt-4 mb-4 d-none"> SOBRE </h1>
                            <article>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 offset-lg-0 order-lg-first col-md-5 offset-md-1 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center align-self-center">
                                        <img class="img-fluid" src="./../../_images/anderson/sobre-1.jpg" title="Parte esquerda de um grafite dividido em dois" alt="Parte esquerda de um grafite dividido em dois" />
                                    </div>

                                        <h2 class="d-none">Sobre</h2>

                                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 order-md-first order-sm-first order-first">

                                        <p>
                                            O <em>Throw-Up</em> é uma pichação evoluída, segundo os grafiteiros. A maior parte das produções de grafite são no estilo <em>Throw-Up</em>
                                            ou conhecidos como <em>BOMB’s</em> por serem mais fáceis, econômicos, e geralmente feitos em lugares não autorizados.
                                        </p>
                                        <p>
                                            São usadas poucas cores, mas bastante contraste entre si. Normalmente são se pinta o fundo e muitas vezes as letras desenhadas têm formato
                                            arredondado, como se tivesse vida própria.
                                        </p>
                                        <p>
                                            Esse estilo foi a fase inicial que levou o ao desenvolvimento do estilo <em>Bubble</em>, em que as letras são redondas, circulares, e muitas vezes
                                            se sobrepõem parcialmente, criando uma imagem que parece expandir-se e formar bolhas.
                                        </p>
                                        <p>
                                            O estilo <em>Bubble</em> pode ser feito em duas cores, onde as letras são pulverizadas em uma cor e posteriormente delineadas com outra, criando um contraste,
                                            ou várias cores podem ser aplicadas para um efeito mais exuberante.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center align-self-center">
                                        <img class="img-fluid" src="./../../_images/anderson/sobre-2.jpg" title="Parte direita de um grafite dividido em dois" alt="Parte direita de um grafite dividido em dois"/>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Artistas -->
                        <div class="tab-pane fade show mt-5" id="nav-item-02" role="tabpanel">
                            <h1 class="text-center d-none">Artistas</h1>
                            <section>
                                <h2 class="d-none">Artistas</h2>
                                <article>
                                    <div class="row justify-content-lg-center mb-5">
                                        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-12 mb-5">
                                            <div class="card">
                                                 <div class="card-fundo"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-1.png" title="Real Grapixo" alt="Real Grapixo">
                                                </div>
                                                <div class="card-body">
                                                    <h2 class="card-title font-weight-bold">Real Grapixo</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                        
                                                    </h3>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: Desconhecido</li>
                                                   </ul>
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://www.instagram.com/realgrapixo/"><i class="fab fa-instagram"></i></a>
                                                        </div>

                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://www.facebook.com/realgrapixo"><i class="fab fa-facebook"></i></a>
                                                        </div>

                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://youtube.com.br/channel/UCfUya8k_iUBiV1W-LKaJwMg"><i class="fab fa-youtube"></i></a>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-2 col-sm-12">
                                            <div class="card">
                                              
                                                <div class="card-fundo2"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-2.png" title="ten.spheres" alt="ten.spheres">
                                                </div>
                                                <div class="card-body">
                                                   <h2 class="card-title font-weight-bold">ten.spheres</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                 
                                                    </h3>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: Desconhecido</li>
                                                </ul>
                                                <div class="card-body">
                                                    <div class="row justify-content-lg-center justify-content-md-center">
                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://instagram.com/ten.spheres?igshid=loasb94kvtug"><i class="fab fa-instagram"></i></a>
                                                        </div>

                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://www.facebook.com/Ten.spheres/"><i class="fab fa-facebook"></i></a>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-lg-center mb-5">
                                        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-12">
                                            <div class="card">
                                                
                                                <div class="card-fundo3"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-3.png" title="ROTA IP" alt="ROTA IP">
                                                </div>
                                                <div class="card-body">
                                                    <h2 class="card-title font-weight-bold">ROTA IP</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                    
                                                    </h3>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: Desconhecido</li>
                                                    </ul>
                                                <div class="card-body">
                                                    <div class="row justify-content-lg-center justify-content-md-center">
                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://www.instagram.com/rotaip/?igshid=2ql04bp1vqyg"><i class="fab fa-instagram"></i></a>
                                                        </div>

                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://www.facebook.com/ROTA.IP"><i class="fab fa-facebook"></i></a>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-2 col-sm-12">
                                            <div class="card">
                                           
                                                <div class="card-fundo4"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-4.png" title="Veni Vidi Vici" alt="Veni Vidi Vici">
                                                </div>
                                                <div class="card-body">
                                                    <h2 class="card-title font-weight-bold">Veni Vidi Vici</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                </h3>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: Desconhecido</li>
                                                </ul>
                                                <div class="card-body">
                                                    <div class="row justify-content-lg-center justify-content-md-center">
                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://www.instagram.com/vx3graffiti/?igshid=1ntju4sun1d9c"><i class="fab fa-instagram"></i></a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>

                        <!-- Galeria -->

                        <div class="tab-pane fade show mt-5" id="nav-item-03" role="tabpanel">
                            <h1 class="mt-4 mb-4 text-center d-none">Galeria</h1>
                            <section>
                                <h2 class="d-none">Galeria</h2>
                                <article>
                                    <h2 class="d-none">Galeria</h2>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-1.jpg" title="Vagões de trem grafitados" alt="Vagões de trem grafitados" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/d4b_d4bs/" target="_blank">@d4b_d4bs</a></strong> em vagões de trem.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-2.jpg" title="Carro de ponta cabeça grafitado" alt="Carro de ponta cabeça grafitado" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/bad_kid_d/" target="_blank">@bad_kid_d</a></strong> em um caminhão de ponta cabeça - Amsterdan, the Netherlands.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-3.jpg" title="Parede de via pública grafitada" alt="Parede de via pública grafitada" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/marcio_maizum/" target="_blank">@márcio_maizum</a></strong> em uma parede em via pública.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="w-100 d-none d-lg-block"></div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-4.jpg" title="Área de proteção de construção grafitada" alt="Área de proteção de construção grafitada" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/5okre/" target="_blank">@5okre</a></strong> na área de proteção de uma construção.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-5.jpg" title="Miniatura de caminhão grafitado" alt="Miniatura de caminhão grafitado" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/abson.one/" target="_blank">@abson.one</a></strong> em uma miniatura de caminhão.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid gallery_adjust" src="./../../_images/anderson/img-6.jpg" title="Vagões de metrô grafitados" alt="Vagões de metrô grafitados" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/alicante_killerz/" target="_blank">@alicante_killerz</a></strong> em um metrô.
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    include ('../../_templates/footer.php');
    //Incluindo o rodapé
?>