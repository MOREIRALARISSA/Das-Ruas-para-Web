<?php include ('../../_templates/header.php'); 
//Incluindo o menu de navegação ?>

    <main>

        <div class="jumbotron junbotrom-fluid mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 font-weight-bold">3D</h1>
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
                                <h1 class="mt-4 mb-4 d-none" role="heading"> About </h1>
                                <article>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 offset-lg-0 order-lg-first col-md-5 offset-md-1 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center align-self-center">
                                            <img class="img-fluid" src="../../_images/adelina/KurtWenner.jpg" alt="Desenho de um home deitado no chão" />
                                        </div>
                                        <h2 class="d-none" role="heading">SOBRE</h2>

                                        <div class="col-lg-4 offset-lg-0 order-lg-first col-md-12 offset-md-0 col-xs-12 offset-xs-0 ">
                                            <p>O grafite é uma arte de rua que ganha cada vez mais espaço na sociedade atual. No grafite 3D o artista utiliza da luz e sombra pra fazer os efeitos realistas como se o desenho tivesse saído do chão ou parede.
                                            </p>
                                            <p>Ele é bem comum nas ruas dos EUA. O graffiti 3D, pode ser feito com tinta ou giz, em paredes ou sobre a rua, representa uma nova forma de combinar o domínio das técnicas arte renascentista com o grafite, efémero qualidades de arte urbana maravilhosa. Estes artistas dão um novo significado ao grafite.
                                            </p>
                                            <p>Esse tipo de desenho forma uma imagem que dá a impressão de volume e realismo. É o estilo mais difícil entre todos, pois exige uma compreensão de perspectiva, luz e sombra, aplicadas à técnica com spray, que trabalha essencialmente com a questão da profundidade. Parece muito com desenhos computadorizados.
                                            </p>

                                        </div>
                                        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center align-self-center">

                                            <img class="img-fluid" src="../../_images/adelina/KurtWenner6.jpg" alt="desenho de um menino magro,careca e franzino" />

                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- Artistas -->
                            <div class="tab-pane fade show " id="nav-item-02" role="tabpanel">
                                <h1 class="text-center d-none" role="heading">Artistas</h1>
                                <section>
                                    <h2 class="text-center d-none" role="heading">Artistas</h2>
                                    <article>
                                        <div class="row justify-content-lg-center my-5">
                                            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-12 mb-5">
                                                <div class="card">
                                                    <div class="card-fundo"></div>
                                                    <div class="avatar mx-auto">
                                                        <img src="../../_images/adelina/EricGroheperfil.jpg" alt="Foto do artista Eric Grohe">
                                                    </div>
                                                    <div class="card-body">
                                                        <h2 class="card-title font-weight-bold" font-weight-bold>Eric Groheper</h2>
                                                        <h3 class="card-subtitle mb-2 text-muted">Desconhecido

                                                </h3>
                                                        <p class="card-text">É um veterano artista de rua americano.</p>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Nascimento: 194, Nova York, Estados Unidos.</li>
                                                        <li class="list-group-item">designer gráfico e ilustrador . </li>
                                                    </ul>

                                                    <div class="card-body">
                                                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas">Saiba mais</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-2 col-sm-12">
                                                <div class="card">

                                                    <div class="card-fundo"></div>
                                                    <div class="avatar mx-auto">
                                                        <img src="../../_images/adelina/KurtWennerperfil.jpg" alt="Fotoa do artista Kurt Wenner">
                                                    </div>
                                                    <div class="card-body">

                                                        <h2 class="card-title font-weight-bold">Kurt Wenner</h2>
                                                        <h3 class="card-subtitle mb-2 text-muted">Kurt Wenner

                                                </h3>
                                                        <p class="card-text">È um grande gênio da modernidade.</p>
                                                    </div>

                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Nascimento: Ann Arbor - Michigan Estados Unidos.</li>
                                                        <li class="list-group-item">Artista gráfico, e ilustrador de projetos.</li>
                                                    </ul>
                                                    <div class="card-body">
                                                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas2">Saiba mais</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-lg-center my-5">
                                            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-12 mb-5">
                                                <div class="card">
                                                    <div class="card-fundo"></div>
                                                    <div class="avatar mx-auto">
                                                        <img src="../../_images/adelina/TracyLeeStumperfil.jpg" alt="foto da artista Tracy Lee Stum">
                                                    </div>
                                                    <div class="card-body">
                                                        <h2 class="card-title font-weight-bold">Tracy Lee Stum</h2>
                                                        <h3 class="card-subtitle mb-2 text-muted">Tracy Lee Stum
                                                    </h3>
                                                        <p class="card-text">Artista respeitada internacionalmente .</p>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item"> Nascimento: Chambersburg, Pensilvânia.</li>
                                                        <li class="list-group-item">Pintora conhecida internacionalmente.</li>
                                                    </ul>
                                                    <div class="card-body">
                                                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas3">Saiba mais</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-2 col-sm-12">
                                                <div class="card">

                                                    <div class="card-fundo"></div>
                                                    <div class="avatar mx-auto">
                                                        <img src="../../_images/adelina/JulianBeeverperfil.jpg" alt="foto do artista Julian Beever">
                                                    </div>
                                                    <div class="card-body">
                                                        <h2 class="card-title font-weight-bold">Julian Beever</h2>
                                                        <h3 class="card-subtitle mb-2 text-muted">Julian Beever
                                                </h3>
                                                        <p class="card-text">Artista inglês nascido em Cheltenham.</p>
                                                    </div>

                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Nascimento:Cheltenham, Reino Unido 1959.</li>
                                                        <li class="list-group-item">Faz os seus desenhos usando giz. </li>
                                                    </ul>
                                                    <div class="card-body">
                                                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas4">Saiba mais</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </section>
                            </div>

                            <!-- Galeria -->

                            <div class="tab-pane fade show  mt-5" id="nav-item-03" role="tabpanel">
                                <h1 class="mt-4 mb-4 text-center d-none">Galeria</h1>
                                <section>
                                    <h2 class="d-none">Galeria</h2>
                                    <article>
                                        <h2 class="d-none">Galeria</h2>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                                <figure class="gallery_border">
                                                    <img class=" img-fluid" src="../../_images/adelina/KurtWenner5.jpg" title="Anjos na parede" alt="imagem de uma pintura de anjos na parede">
                                                    <figcaption class="mt-2">
                                                        Grafite 3D do artista Kurt Wenner.
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                                <figure class="gallery_border">
                                                    <img class=" img-fluid galeria " src="../../_images/adelina/EricGrohe4.jpg" title="Montanha ao fundo" alt="desenho com arvores e montanha vevada ao fundo">
                                                    <figcaption class="mt-2">
                                                        Grafite feito 3D do artista Eric Grohe.
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                                <figure class="gallery_border">
                                                    <img class=" img-fluid" src="../../_images/adelina/TracyLeeStum8.jpg" title="Menino no jardim" alt="desenho de um menino cabelos cor laranja num jardim verde">
                                                    <figcaption class="mt-2">
                                                        Pintura feita pela artista Tracy Lee Stum
                                                    </figcaption>
                                                </figure>
                                            </div>

                                            <div class="w-100 d-none d-lg-block"></div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                                <figure class="gallery_border">
                                                    <img class=" img-fluid " src="../../_images/adelina/TracyLeeStum7.jpg" title="três Trigres" alt="Pintura feita no chão de três trigres ">
                                                    <figcaption class="mt-2">
                                                        Pintura feita pela artista Tracy Lee Stum.
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                                <figure class="gallery_border">
                                                    <img class=" img-fluid" src="../../_images/adelina/JulianBeever6.jpg" title=" cachoeira em caverna" alt="desenho de uma caverna com uma cachoeira feito na rua ">
                                                    <figcaption class="mt-2">
                                                        Pintura feita pelo artista Julian Beever.
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                                <figure class="gallery_border">
                                                    <img class=" img-fluid" src="../../_images/adelina/TracyLeeStum5.jpg" title="Mumia do Egito " alt="Desenho de uma mumia saindo de sua cripta">
                                                    <figcaption class="mt-2">
                                                        Pintura feita pelo artista Julian Beever.
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

    <div class="modal fade" id="modalArtistas" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Eric Grohe Alan</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>

                        Eric Grohe Alan nasceu em Nova York em 1944.Sua carreira profissional como designer gráfico e ilustrador começou em Seattle em 1961, brevemente interrompido por um período de serviço no Vietnã. Eric foi contratado como designer gráfico por Naramore, Bain, Brady & Johanson, empresa nacional de arquitetura. depois, ele trabalhou com a Universidade de Cambridge. em segida ilustrando escavações na França, Grécia, Israel e Inglaterra.Eric trabalhou em Nova York como ilustrador freelancer. Ao longo de sua carreira de 43 anos como um artista profissional, Grohe tem recebido reconhecimento internacional.


                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalArtistas2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Kurt Wenner</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <p>O artista Kurt Wenner é um grande gênio da modernidade. Ele nasceu em Ann Arbor - Michigan, hoje, mundialmente conhecido pelas suas pinturas de rua, street art e paineis. Sua técnica de pintura é a anamorphosis (projeção em perspectiva) onde usa giz, dando uma dimensão 3D as suas pinturas. Começou como artista gráfico aos dezesseis anos. Trabalhou para a NASA como ilustrador de projetos espaciais e paisagens extra-terrestres. Seu trabalho é requisitado por empresas públicas e privadas e também por personalidades importantes, que o contrata para realizar projetos de arte, além de ser um brilhante arquiteto.
                    </p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalArtistas3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Tracy Lee Stum.</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    Tracy nasceu em Chambersburg, Pensilvânia, e foi criada em West Chester, um subúrbio da Filadélfia.Stum começou a pintura de rua em 1998 no Santa Barbara Madonnari Festival, o primeiro e mais antigo festival de pintura de rua criado nos EUA. É uma artista com um talento respeitado internacionalmente, Stum é reconhecida como a principal pintora de rua do mundo atualmente. Suas pinturas e murais de rua em 3D foram encomendadas por empresas, agências de publicidade, organizações de artes, institutos educacionais e agências governamentais em toda a América do Norte, Ásia e Europa.


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalArtistas4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Julian Beever</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    Julian Beever é um artista inglês nascido em Cheltenham, Reino Unido 1959. Cresceu em Melton Mowbray. Julian cria desenhos tridimensionais utilizando giz como material e trabalha para várias empresas como freelancer, criando murais em campanhas promocionais. Frequentemente é chamado de Pavement Picasso. Em média, o artista leva cerca de três dias para completar uma obra. Já visitou vários países, tais como: Reino Unido, Bélgica, França, Países Baixos, Alemanha, Áustria, Dinamarca, Espanha, Estados Unidos, Austrália, Brasil e Portugal.



                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>


    <?php
    include ('../../_templates/footer.php');
    //Incluindo o rodapé
?>
