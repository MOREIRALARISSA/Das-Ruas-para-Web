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
                    <div class="tab-content" id="nav-pills-content">
                        <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                            <!-- Sobre -->
                            <h1 class="mt-4 mb-4"> SOBRE </h1>
                            <div class="row align-items-center">
                                <aside>
                                    <div class="col-lg-4 offset-lg-0 order-lg-first col-md-5 offset-md-1 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center">
                                        <img class="img-fluid" src="./../../_images/anderson/sobre-1.jpg" alt="Parte esquerda de um grafite dividido em dois" />
                                    </div>
                                </aside>

                                <article>
                                    <h2>Sobre</h2>
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
                                </article>

                                <aside>
                                    <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center">
                                        <img class="img-fluid" src="./../../_images/anderson/sobre-2.jpg" alt="Parte direita de um grafite dividido em dois" />
                                    </div>
                                </aside>
                            </div>
                        </div>
                        
                        <!-- Artistas -->
                        <div class="tab-pane fade show " id="nav-item-02" role="tabpanel">
                            <h1 class="text-center mb-4">Artistas</h1>
                            <section>
                                <h2 class="d-none">Artistas</h2>
                                <article>
                                    <div class="row justify-content-lg-center mb-5">
                                        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-12 mb-5">
                                            <div class="card">
                                                <!-- <img class="card-img-top" src="" alt=""/> -->
                                                <div class="card-fundo"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-1.png" alt="Real Grapixo">
                                                </div>
                                                <div class="card-body">
                                                    <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4> -->
                                                    <h2 class="card-title font-weight-bold">Real Grapixo</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                        <!--ou Robin Gunningham[2]-->
                                                    </h3>
                                                    <p class="card-text">É um veterano artista de rua britânico</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: 1974 (idade 45 anos), Bristol, Reino Unido</li>
                                                    <!-- <li class="list-group-item">Período: Arte urbana</li> -->
                                                    <li class="list-group-item">Diretor de cinema, Pintor, Ativista político, Artivista, Artista de rua, Escritor e Escultor </li>
                                                    <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                    <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                    <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
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
                                                    <!-- <a href="#" class="card-link">link</a> -->
                                                    <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas">Saiba mais</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-2 col-sm-12">
                                            <div class="card">
                                                <!-- <img class="card-img-top" src="" alt=""/> -->
                                                <div class="card-fundo"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-2.png" alt="ten.spheres">
                                                </div>
                                                <div class="card-body">
                                                    <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4> -->
                                                    <h2 class="card-title font-weight-bold">ten.spheres</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                        <!--ou Robin Gunningham[2]-->
                                                    </h3>
                                                    <p class="card-text">É um veterano artista de rua britânico</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: 1974 (idade 45 anos), Bristol, Reino Unido</li>
                                                    <!-- <li class="list-group-item">Período: Arte urbana</li> -->
                                                    <li class="list-group-item">Diretor de cinema, Pintor, Ativista político, Artivista, Artista de rua, Escritor e Escultor </li>
                                                    <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                    <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                    <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
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
                                                    <!-- <a href="#" class="card-link">link</a> -->
                                                    <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas2">Saiba mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-lg-center mb-5">
                                        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-12 mb-5">
                                            <div class="card">
                                                <!-- <img class="card-img-top" src="" alt=""/> -->
                                                <div class="card-fundo"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-3.png" alt="ROTA IP">
                                                </div>
                                                <div class="card-body">
                                                    <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4> -->
                                                    <h2 class="card-title font-weight-bold">ROTA IP</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                        <!--ou Robin Gunningham[2]-->
                                                    </h3>
                                                    <p class="card-text">É um veterano artista de rua britânico</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: 1974 (idade 45 anos), Bristol, Reino Unido</li>
                                                    <!-- <li class="list-group-item">Período: Arte urbana</li> -->
                                                    <li class="list-group-item">Diretor de cinema, Pintor, Ativista político, Artivista, Artista de rua, Escritor e Escultor </li>
                                                    <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                    <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                    <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
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
                                                    <!-- <a href="#" class="card-link">link</a> -->
                                                    <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas">Saiba mais</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-2 col-sm-12">
                                            <div class="card">
                                                <!-- <img class="card-img-top" src="" alt=""/> -->
                                                <div class="card-fundo"></div>
                                                <div class="avatar mx-auto">
                                                    <img src="../../_images/anderson/artista-4.png" alt="Veni Vidi Vici">
                                                </div>
                                                <div class="card-body">
                                                    <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4> -->
                                                    <h2 class="card-title font-weight-bold">Veni Vidi Vici</h2>
                                                    <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                        <!--ou Robin Gunningham[2]-->
                                                    </h3>
                                                    <p class="card-text">É um veterano artista de rua britânico</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Nascimento: 1974 (idade 45 anos), Bristol, Reino Unido</li>
                                                    <!-- <li class="list-group-item">Período: Arte urbana</li> -->
                                                    <li class="list-group-item">Diretor de cinema, Pintor, Ativista político, Artivista, Artista de rua, Escritor e Escultor </li>
                                                    <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                    <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                    <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                </ul>
                                                <div class="card-body">
                                                    <div class="row justify-content-lg-center justify-content-md-center">
                                                        <div class="col-lg-2 col-md-3 redes-artistas">
                                                            <a href="https://www.instagram.com/vx3graffiti/?igshid=1ntju4sun1d9c"><i class="fab fa-instagram"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- <a href="#" class="card-link">link</a> -->
                                                    <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas">Saiba mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>

                            <!-- Galeria -->
                        <div class="tab-pane fade show " id="nav-item-03" role="tabpanel">
                            <h1 class="mt-4 mb-4 text-center">Galeria</h1>
                            <section>
                                <h2 class="d-none">Galeria</h2>
                                <article>
                                    <h2 class="d-none">Galeria</h2>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-1.jpg" title="Vagões de trem grafitados" alt="Vagões de trem grafitados" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/d4b_d4bs/">@d4b_d4bs</a></strong> em vagões de trem.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-2.jpg" title="Carro de ponta cabeça grafitado" alt="Carro de ponta cabeça grafitado" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/bad_kid_d/">@bad_kid_d</a></strong> em um caminhão de ponta cabeça - Amsterdan, the Netherlands.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-3.jpg" title="Parede de via pública grafitada" alt="Parede de via pública grafitada" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/marcio_maizum/">@márcio_maizum</a></strong> em uma parede em via pública.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="w-100 d-none d-lg-block"></div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-4.jpg" title="Área de proteção de construção grafitada" alt="Área de proteção de construção grafitada" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/5okre/">@5okre</a></strong> na área de proteção de uma construção.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="./../../_images/anderson/img-5.jpg" title="Miniatura de caminhão grafitado" alt="Miniatura de caminhão grafitado" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/abson.one/">@abson.one</a></strong> em uma miniatura de caminhão.
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid gallery_adjust" src="./../../_images/anderson/img-6.jpg" title="Vagões de metrô grafitados" alt="Vagões de metrô grafitados" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Throu-Up</em> feito por <strong><a href="https://www.instagram.com/alicante_killerz/">@alicante_killerz</a></strong> em um metrô.
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

<div class="modal fade" id="modalArtistas" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">modal</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">Banksy é o pseudônimo de um artista pintor de graffiti, pintor de telas, ativista político e diretor de cinema britânico. A sua arte de rua satírica e subversiva combina humor negro e graffiti feito com uma distinta técnica de estêncil. Seus trabalhos de comentários sociais e políticos podem ser encontrados em ruas, muros e pontes de cidades por todo o mundo. O trabalho de Banksy nasceu da cena alternativa de Bristol, e envolveu colaborações com outros artistas e músicos. De acordo com o designer gráfico e autor Tristan Manco, Banksy nasceu em 1974 em Bristol (Inglaterra), onde também foi criado. Filho de um técnico de fotocopiadora, começou como açougueiro mas se envolveu com graffiti durante o grande boom de aerossol em Bristol no fim da década de 1980. Observadores notaram que seu estilo é muito similar a Blek le Rat, que começou a trabalhar com estênceis em 1981 em Paris, e à campanha de graffiti feita pela banda anarco-punk Crass no sistema de metro de Londres no fim da década de 1970. Conhecido pelo seu desprezo pelo governo que rotula graffiti como vandalismo, Banksy expõe sua arte em locais públicos como paredes e ruas, e chega a usar objetos para expô-la. Banksy não vende seus trabalhos diretamente, mas sabe-se que leiloeiros de arte tentaram vender alguns de seus graffitis nos locais em que foram feitos e deixaram o problema de como remover o desenho nas mãos dos compradores. O primeiro filme de Banksy, ‘Exit Through the Gift Shop’, teve sua estreia no Festival de Filmes de Sundance, foi oficialmente lançado no Reino Unido no dia 5 de março de 2010, e em janeiro de 2011 foi nomeado para o Oscar de Melhor Documentário. </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalArtistas2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">modal</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">Com publicações em livros, revistas, entre outros, o trabalho de Izolag está presente em galerias e coleções pelo mundo, apresentando técnicas e estilos diversificados. Izolag já teve exposições no Brasil, Alemanha, Holanda, Estados Unidos, Bélgica e Austrália , estando em coleções particulares desde 2006.
                Também esteve em Bienais, foi convidado pela ONU a participar da exposição Encontro das Áfricas - ONU (Organização das Nações Unidas), no Rio de Janeiro.
                Izolag atua a longo tempo, na área de identidade visual, capas de disco, palcos, e murais, já fez projetos com grandes nomes como NIKE, APPLE entre outros. Nascido no Rio de Janeiro se interessou por desenho e pintura ainda criança, na Bahia, onde cresceu, cursou artes plásticas e aprofundou as pesquisas em graffiti, stencil, poster e caligrafia, tornando-se peça fundamental da técnica stencil. Ficou conhecido pela utilização da técnica em grandes proporções e comdiversas camadas de cores, criando uma ilusão mais realista das imagens. Além o artista é conhecido por destruir suas gravura após uma única utilização, é um dos pioneiros no Brasil, em 2013, inventou uma nova técnica de stencil com linhas em ângulos usando material reciclado que em 2014 possibilitou a construção do maior stencil do mundo, a maior gravura já feita na história, no centro do Rio de Janeiro. O artista aborda o mundo em sua volta, através da captura de imagens que faz, pode se perceber sua passagem por diversos lugares observando sua produção, seja os meninos no agreste pernambucano, pescadores da Bahia, o cotidiano carioca, os moradores de rua e trabalhadores em São Paulo, já no South Bronx (NY) o artista retratou as pessoas e suas influências, as quais deram origem a cultura Hip Hop, ou seja,a produção é um espelho do que o artista observa.
                Atualmente morando na Bahia, faz pesquisas e projetos em pequenas comunidades, revertendo parte de seus lucros num projeto que chama Arte pela Humanidade, no qual a venda de desenhos originais são direcionada a compra de materiais de criação, como, papéis, lápis de cor, pincel, tinta, cadernos etc. Assim levando mais que arte as comunidades mas também possibilidade de criar através de suas raízes.

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalArtistas3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">modal</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">Banksy é o pseudônimo de um artista pintor de graffiti, pintor de telas, ativista político e diretor de cinema britânico. A sua arte de rua satírica e subversiva combina humor negro e graffiti feito com uma distinta técnica de estêncil. Seus trabalhos de comentários sociais e políticos podem ser encontrados em ruas, muros e pontes de cidades por todo o mundo. O trabalho de Banksy nasceu da cena alternativa de Bristol, e envolveu colaborações com outros artistas e músicos. De acordo com o designer gráfico e autor Tristan Manco, Banksy nasceu em 1974 em Bristol (Inglaterra), onde também foi criado. Filho de um técnico de fotocopiadora, começou como açougueiro mas se envolveu com graffiti durante o grande boom de aerossol em Bristol no fim da década de 1980. Observadores notaram que seu estilo é muito similar a Blek le Rat, que começou a trabalhar com estênceis em 1981 em Paris, e à campanha de graffiti feita pela banda anarco-punk Crass no sistema de metro de Londres no fim da década de 1970. Conhecido pelo seu desprezo pelo governo que rotula graffiti como vandalismo, Banksy expõe sua arte em locais públicos como paredes e ruas, e chega a usar objetos para expô-la. Banksy não vende seus trabalhos diretamente, mas sabe-se que leiloeiros de arte tentaram vender alguns de seus graffitis nos locais em que foram feitos e deixaram o problema de como remover o desenho nas mãos dos compradores. O primeiro filme de Banksy, ‘Exit Through the Gift Shop’, teve sua estreia no Festival de Filmes de Sundance, foi oficialmente lançado no Reino Unido no dia 5 de março de 2010, e em janeiro de 2011 foi nomeado para o Oscar de Melhor Documentário. </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalArtistas4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">modal</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">Banksy é o pseudônimo de um artista pintor de graffiti, pintor de telas, ativista político e diretor de cinema britânico. A sua arte de rua satírica e subversiva combina humor negro e graffiti feito com uma distinta técnica de estêncil. Seus trabalhos de comentários sociais e políticos podem ser encontrados em ruas, muros e pontes de cidades por todo o mundo. O trabalho de Banksy nasceu da cena alternativa de Bristol, e envolveu colaborações com outros artistas e músicos. De acordo com o designer gráfico e autor Tristan Manco, Banksy nasceu em 1974 em Bristol (Inglaterra), onde também foi criado. Filho de um técnico de fotocopiadora, começou como açougueiro mas se envolveu com graffiti durante o grande boom de aerossol em Bristol no fim da década de 1980. Observadores notaram que seu estilo é muito similar a Blek le Rat, que começou a trabalhar com estênceis em 1981 em Paris, e à campanha de graffiti feita pela banda anarco-punk Crass no sistema de metro de Londres no fim da década de 1970. Conhecido pelo seu desprezo pelo governo que rotula graffiti como vandalismo, Banksy expõe sua arte em locais públicos como paredes e ruas, e chega a usar objetos para expô-la. Banksy não vende seus trabalhos diretamente, mas sabe-se que leiloeiros de arte tentaram vender alguns de seus graffitis nos locais em que foram feitos e deixaram o problema de como remover o desenho nas mãos dos compradores. O primeiro filme de Banksy, ‘Exit Through the Gift Shop’, teve sua estreia no Festival de Filmes de Sundance, foi oficialmente lançado no Reino Unido no dia 5 de março de 2010, e em janeiro de 2011 foi nomeado para o Oscar de Melhor Documentário. </div>

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