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
                    <h1 class="display-4 font-weight-bold">Freestyle</h1>
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
                            <!-- SOBRE  -->
                            <h1> SOBRE </h1>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="./../../_images/igor/Sobregrafite.jpg" alt="">
                                </div>

                                <div class="col-lg-4">
                                    
                                        <p>
                                        O estilo FREESTYLE inclui toda criação do grafite já feita, misturando letras, desenhos e tags (assinaturas), Spray, látex, canetão, colagem de stickers,
                                        são algumas formas e materiais usados nessa categoria da arte, é um grafite sem esboço.</p>
                                        <p> É conhecido tambem como um estilo livre,onde os artistas grafitam no improviso.
                                        </p>

                                    </div>
                                <div class="col-lg-4">
                                    <img src="./../../_images/igor/Sobregrafite.jpg" alt="">
                                </div>
                            </div>
                                 </article>
                        </div>
                        
                        <div class="tab-pane fade show " id="nav-item-02" role="tabpanel">
                            <section>
                                <h1 class="text-center">Artistas</h1>
                                <div class="row justify-content-lg-center mb-5">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <!-- <img class="card-img-top" src="" alt=""/>-->
                                            <div class="card-fundo"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/igor/ArtistaBolinho.jpg" alt="Bolinho" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4>-->
                                                <h2 class="card-title" font-weight-bold>Quero Bolinho</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Maria Raquel Bolinho
                                                    <!--ou Robin Gunningham[2]-->
                                                </h3>
                                                <p class="card-text">Maria Raquel Bolinho é criadora do personagem Bolinho.
                                                 Suas mais de 600 obras estão espalhadas pelas cidades de Belo Horizonte, Itabira e São Paulo. </p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: 3 de Dezembro de 1985, Belo Horizonte, Minas Gerais, Brasil</li>
                                                <!--                        <li class="list-group-item">Período: Arte urbana</li>-->
                                                <li class="list-group-item">Artista, Muralista, Desenhista, Grafiteira</li>
                                                <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li>-->
                                            </ul>
                                            <div class="card-body">
                                                <img src="../../_images/anderson/icon.png" alt="" />
                                                <!-- <a href="#" class="card-link">link</a>-->
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistasB">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card">
                                            <!-- <img class="card-img-top" src="" alt=""/>-->
                                            <div class="card-fundo"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/igor/ArtistaChivitz.jpg" alt="Chivitz" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4>-->
                                                <h2 class="card-title" font-weight-bold>Chivitz</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                </h3>
                                                <p class="card-text">Com traços característicos e cores marcantes, Chivitz se diverte retratando em paredes sua vivência na atmosfera urbana de São Paulo.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: Desconhecido</li>
                                                <!-- <li class="list-group-item">Período: Arte urbana</li>-->
                                                <li class="list-group-item">Artista de rua, Desenhista e Grafiteiro, Muralista</li>
                                                <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li>-->
                                            </ul>
                                            <div class="card-body">
                                                <img src="../../_images/anderson/icon.png" alt="" />
                                                <!-- <a href="#" class="card-link">link</a>-->
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistasC">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-lg-center mb-5">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <!-- <img class="card-img-top" src="" alt=""/>-->
                                            <div class="card-fundo"></div>
                                            <div class="avatar mx-auto">
                                            <img src="../../_images/igor/ArtistaMinhau.jpg" alt="Minhau" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4>-->
                                                <h2 class="card-title" font-weight-bold>Minhau</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Camila Pavanelli</h3>
                                                <p class="card-text">Conhecida como Minhau, é artista urbana de São Paulo. </p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: Piracicaba, São Paulo, Brasil</li>
                                                <li class="list-group-item">Artista de rua, Desenhista, Muralista, Grafiteira</li>
                                            </ul>
                                            <div class="card-body">
                                                <img src="../../_images/anderson/icon.png" alt="" />
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas3">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-fundo"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/igor/ArtistaRamar.jpg" alt="Ramar" class="img-fluid">
                                            </div>

                                            <div class="card-body">
                                                <h2 class="card-title" font-weight-bold>Ramar</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Ramar Gamar</h3>
                                                <p class="card-text">Ramar tem seus trabalhos voltado ao design de superfície e arte urbana</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: Ouro Preto, Minas Gerais, Brasil</li>
                                                <li class="list-group-item">. Ilustrador, grafiteiro e graduado em Design Gráfico pela FUMEC.</li>
                                            </ul>
                                            <div class="card-body">
                                                <img src="../../_images/anderson/icon.png" alt="" />
                                                <!-- <a href="#" class="card-link">link</a>-->
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistasR">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade show " id="nav-item-03" role="tabpanel">
                            <h1> Grafite - Mural </h1>
                            <div class="row p-3">
                                <div class="col-lg-4">
                                    <figure class="mt-3 mb-3">
                                        <img src="./../../_images/igor/BolinhoGrafite.jpg" alt="Grafite da Raquel Bolinho,sim é um bolinho">
                                        <figcaption class="mt-3 mb-3">Grafite feito por <strong><a href="https://www.instagram.com/raquelbolinho/">@querobolinho</a></strong> </figcaption>
                                    </figure>
                                </div>

                                <div class="col-lg-4">
                                    <figure class="mt-3 mb-3">
                                        <img src="./../../_images/igor/ChivitzGrafite.jpg" alt="Grafite Chivitz">
                                        <figcaption class="mt-3 mb-3">Grafite feito por <strong><a href="https://www.instagram.com/chivitz/">@Chivitz</a></strong> </figcaption>
                                    </figure>
                                </div>

                                <div class="col-lg-4">
                                <figure class="mt-3 mb-3">
                                    <img src="./../../_images/igor/MinhauArtista.JPG" alt="Grafite Minhau">
                                    <figcaption class="mt-3 mb-3">Grafite feito por <strong><a href="https://www.instagram.com/minhau_sp/">@minhau_sp</a></strong> </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="row p-3">
                                <div class="col-lg-4">
                                    <figure class="mt-3 mb-3"> 
                                        <img src="./../../_images/igor/minhaugrafite.JPG" alt="Grafite Minhau">
                                        <figcaption class="mt-3 mb-3">Grafite feito por <strong><a href="https://www.instagram.com/minhau_sp/">@minhau_sp</a></strong> </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-4">
                                    <figure class="mt-3 mb-3">
                                        <img src="./../../_images/igor/querobolinhosobre.jpg" alt="grafite Bolinho">
                                        <figcaption class="mt-3 mb-3">Grafite feito por <strong><a href="https://www.instagram.com/raquelbolinho/">@querobolinho</a></strong></figcaption>
                                    </figure>    
                                </div>
                                <div class="col-lg-4">
                                    <figure class="mt-3 mb-3"> 
                                        <img src="./../../_images/igor/RamarGrafite.jpg" alt="Grafite Ramar">
                                        <figcaption class="mt-3 mb-3">Grafite feito por<strong><a href="https://www.instagram.com/ramargama/?hl=pt-br">@ramargama</a></strong> </figcaption>
                                    </figure>                                                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modalArtistasB" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Raquel bolinho</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                Suas criações artísticas já lhe proporcionaram convites para criação de painéis em espaço como: 
                Aeroporto Internacional Tancredo Neves, Cidade Administrativa, Palácio da Liberdade, Universidade Estadual de Minas Gerais,
                 Escola de Saúde Pública de Minas Gerais e Rodoviária de BH.
                </p>
                <p>A artista, formada em Letras pela UFMG, estudou Artes Visuais na Escola de Design da UEMG e vem espalhando suas intervenções de Graffiti desde 2009.
                </p>
                <p> Atualmente, paralelo aos trabalhos como grafiteira, administra a Loja Virtual Quero Bolinho e organiza o Bazar do Bolinho, 
                evento semestral que em cada edição reúne mais de 2.000 fãs do personagem.
                </p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalArtistasC" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Chivitz</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                Com traços característicos e cores marcantes, Chivitz se diverte retratando em paredes sua vivência na atmosfera urbana de São Paulo.
                 Seu graffiti aborda e transborda criatividade nas interfaces da cidade, como o Skate, a Tatuagem, o Hip Hop entre outras culturas de rua.
                  Seu estilo é inconfundível e conversa de maneira bem humorada com o povo nas ruas, a maior inspiração do artista.
                </p>
                <p>Há mais de dez anos intervindo na rua como artista urbano,
                 Chivitz cravou seu nome no cenário artístico-underground de São Paulo através de seus trabalhos intrinsecamente relacionados ao graffiti e à tatuagem.
                 </p>
                 <p>. Criador de uma linguagem híbrida que vagueia entre estes dois campos da pintura e se instala em suportes variados, o artista apresenta trabalhos dotados de estética inconfundível,
                  marcada pelo uso das cores lilás, cinza, preta, branca e magenta. 
                 A originalidade de seu estilo é resultado de sua vivência na atmosfera urbana do Skate e do Hip Hop e de outras interfaces da cidade, instigando sua mente criativa o tempo todo.
                 </p>
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
                <h4 class="modal-title">Minhau</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                Desde a infância, já pintava cerâmica e sucata, mas foi em 2004 que iniciou carreira com a colagem de desenhos – “lambes” – pela cidade de São Paulo. 
                </p>
                <p>
                Sua arte aparece em lugares enigmáticos da cidade, como Estação da Luz, ruas Augusta e Frei Caneca e muros do Brás. 
                </p>
                <p>
                Influenciada pelo grafiteiro Chivitz, começou a colorir os muros da metrópole grafitando gatos coloridos, figura recorrente em seu trabalho.
                <p>Natural de Piracicaba, é casada com o grafiteiro veterano, Chivitz. Foi junto com ele que pintou seu primeiro muro. "Estou evoluindo a cada dia, gosto de trabalhar com todas as cores possíveis, usando traços soltos."
                </p>
                <p>Há trabalhos seus decorando pratos promocionais do restaurante Spoleto e modelos das sandálias Havaianas. 
                    A grafiteira faz parte dos artistas que intervém no cenário da cidade. O mais legal é que a Minhau retrata gatos super coloridos em seus trabalhos, trazendo mais alegria ao ambiente.
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalArtistasR" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ramar</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                Ramar tem seu trabalho voltado ao design de superfície, identidade visual, lettering, ilustração e arte urbana.
                </p>
                <p> Seus trabalhos autorais buscam expressar movimentos e despertar sensações através dos traços e cores aplicados em seu contexto.
                 Toda sua inspiração é fruto de referências encontradas nas culturas de rua e elementos da natureza.
                 </p>
                 <p>Campeão Brasileiro do Red Bull Doodle Art 2014
                    2 vezes premiado pela revista fluir como melhor ilustração, concorrendo a uma prancha.

                </p>
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