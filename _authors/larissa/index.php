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
                    <h1 class="display-4 font-weight-bold">Mural</h1>                 
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
                                    <img src="./../../_images/larissa/SOBRE.png" alt="">
                                </div>

                                <div class="col-lg-4">
                                    <p> O termo muralismo, ou pintura mural, foi criado a partir das pinturas feitas no início do século 20, no México. Esses trabalhos eram realistas e monumentais.
                                    </p>
                                    <p> Contudo, a pintura feita sobre paredes é uma técnica antiga. É uma forma de arte pública, como o grafite, porém, diferentemente deste, tem estreita relação com a arquitetura, podendo explorar o caráter plano de uma parede ou criar o efeito de uma nova área de espaço.
                                    </p>
                                    <p>
                                    No Renascimento, temos importantes artistas que revigoraram a técnica do afresco, como Michelangelo e suas pinturas na Capela Sistina. Conduto, após esse período a técnica entrou em decadência, somente retornando com força no século 20, com as vanguardas européias: fauvistas e cubistas, que faziam murais com características expressionistas e abstratas.
                                    </p>
                                    <p>
                                    Outro local onde a pintura mural ressurgiu no início do século 20 foi o México, momento também de forte efervescência política e social, marcado pela Revolução Mexicana (1910-20). Os artistas mexicanos viram no muralismo o melhor caminho para expressar suas idéias sobre uma arte nacional popular, engajada no momento revolucionário.
                                    </p> 
                                </div>

                                <div class="col-lg-4">
                                    <img src="./../../_images/larissa/SOBRE.png" alt="">
                                </div>
                            </div>
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
                                                <img src="../../_images/larissa/aryzperfil.jpg" alt="Aryz" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4>-->
                                                <h2 class="card-title" font-weight-bold>Aryz</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Desconhecido
                                                    <!--ou Robin Gunningham[2]-->
                                                </h3>
                                                <p class="card-text">Aryz é um artista de Barcelona muito conhecido por seus murais em grande escala.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: Palo Alto, Califórnia, Estados Unidos</li>
                                                <!--                        <li class="list-group-item">Período: Arte urbana</li>-->
                                                <li class="list-group-item">Artista, Pintor, Desenhista</li>
                                                <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li>-->
                                            </ul>
                                            <div class="card-body">
                                                <img src="../../_images/anderson/icon.png" alt="" />
                                                <!-- <a href="#" class="card-link">link</a>-->
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas1">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card">
                                            <!-- <img class="card-img-top" src="" alt=""/>-->
                                            <div class="card-fundo"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/larissa/kobraperfil.jpg" alt="Kobra" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4>-->
                                                <h2 class="card-title" font-weight-bold>Kobra</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Eduardo Kobra
                                                </h3>
                                                <p class="card-text">É um veterano artista de rua Brasileiro, conhecido por seu enormes projetos.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: 1975 (idade 44 anos), São Paulo, Brasil</li>
                                                <!-- <li class="list-group-item">Período: Arte urbana</li>-->
                                                <li class="list-group-item">Artivista, Artista de rua, Desenhista e Grafiteiro</li>
                                                <!-- <li class="list-group-item">Série: Better Out Than In</li>
                                                <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li> -->
                                                <!-- <li class="list-group-item">Filmes: Saída Pela Loja, The Antics Roadshow, Rebel Rocket Attack</li>-->
                                            </ul>
                                            <div class="card-body">
                                                <img src="../../_images/anderson/icon.png" alt="" />
                                                <!-- <a href="#" class="card-link">link</a>-->
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas2">Saiba mais</a>
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
                                            <img src="../../_images/larissa/kueiaperfil.jpg" alt="Kueia" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h4 class="card-title font-weight-bold">Caio César Assumpção Rosseto</h4>-->
                                                <h2 class="card-title" font-weight-bold>Kueia</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Karen Fidelis</h3>
                                                <p class="card-text">Artista de rua paulista conhecida pelo seu personagem Kuei.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: São Paulo, Brasil</li>
                                                <li class="list-group-item">Artista de rua e Desenhista</li>
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
                                                <img src="../../_images/larissa/cricaperfil.jpg" alt="Crica" class="img-fluid">
                                            </div>

                                            <div class="card-body">
                                                <h2 class="card-title" font-weight-bold>Crica Monteiro</h2>
                                                <h3 class="card-subtitle mb-2 text-muted">Cristiane Monteiro</h3>
                                                <p class="card-text">Comecou a grafitar ainda na adolescência e aí foi paixão a primeira riscada de spray na parede.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: São Paulo, Brasil</li>
                                                <li class="list-group-item">Designer, Ilustradora e Grafiteira.</li>
                                            </ul>
                                            <div class="card-body">
                                                <img src="../../_images/anderson/icon.png" alt="" />
                                                <!-- <a href="#" class="card-link">link</a>-->
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas4">Saiba mais</a>
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
                                    <figure>
                                        <img src="./../../_images/larissa/aryz.jpg" alt="Grafite Aryz">
                                        <figcaption>Mural  feito por <strong><a href="https://www.instagram.com/mr_aryz/">@mr_aryz</a></strong> no Fórum Cultural, Carballo, Galiza, 2015.</figcaption>
                                    </figure>
                                </div>

                                <div class="col-lg-4">
                                    <figure>
                                        <img src="./../../_images/larissa/kobra.jpg" alt="Grafite Kobra">
                                        <figcaption>Mural  feito por <strong><a href="https://www.instagram.com/kobrastreetart/">@kobrastreetart</a></strong> no distrito de Wynwood, Miami, Estados Unidos, 2016.</figcaption>
                                    </figure>
                                </div>

                                <div class="col-lg-4">
                                <figure>
                                    <img src="./../../_images/larissa/kueia.jpg" alt="Grafite Kueia">
                                    <figcaption>Mural  feito por <strong><a href="https://www.instagram.com/karenfidelis.art/?hl=pt-br">@karenfidelis.art</a></strong> na Avenida Paulista, em São Paulo, 2018.</figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="row p-3">
                                <div class="col-lg-4">
                                    <figure>
                                        <img src="./../../_images/larissa/crica.jpg" alt="Grafite Crica">
                                        <figcaption>Mural  feito por <strong><a href="https://www.instagram.com/crica.monteiro/?igshid=16q7jmvny9b51">@crica.monteiro</a></strong> em São Paulo, 2016.</figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-4">
                                    <figure>
                                        <img src="./../../_images/larissa/siria.jpeg" alt="Maior mural da Síria">
                                        <figcaption>Mural  feito pelos artistas<strong><a href="https://www.instagram.com/rimonguimaraes/?hl=pt-br">@rimonguimaraes</a></strong> e <strong><a href="https://www.instagram.com/zehpalito/?hl=pt-br">@zehpalito</a></strong> na cidade Damasco em meio a guerra da Síria, 2017.</figcaption>
                                    </figure>    
                                </div>
                                <div class="col-lg-4">
                                    <figure>
                                        <img src="./../../_images/larissa/kobramurcia.jpg" alt="Grafite Kobra em Murcia na Espanha">
                                        <figcaption>Mural  feito por<strong><a href="https://www.instagram.com/kobrastreetart/">@kobrastreetart</a></strong> no Centro Cultural Puertas de Castilla, em Murcia, na Espanha, 2017.</figcaption>
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
<div class="modal fade" id="modalArtistas1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Aryz</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                    Nascido em Palo Alto, Califórnia. Desde os 3 anos de idade, ele cresceu nos subúrbios de Barcelona, ​​Espanha. Muito cedo, Aryz mostrou interesse pela cena do graffiti, então rapidamente se juntou a uma equipe local.
                </p>
                <p>
                “Quando eu estava no ensino médio, conheci alguns caras que dançavam break e ouviam hip hop e comecei a andar com eles, um dia eles disseram: 'vamos pintar uma parede'. Fomos comprar alguns sprays e pintamos ... Acabamos de fazer uma bagunça enorme ... Tentei consertar no dia seguinte ... mas acabou ainda pior. Desde então, tem sido um desafio pessoal. ”
                <p>
                <p>
                    No começo, ele pintou caracteres entre as cartas de seus parceiros, mas devido a uma lesão no dedo, Aryz começou a combinar a lata de spray com os pincéis. Essa reviravolta do destino encerrou seu relacionamento com os outros escritores, mas também o levou a tentar peças mais ambiciosas.
                </p>
                <p>
                    Aryz prefere criar grandes murais de personagens sem focar em uma mensagem específica. Aryz é conhecido por usar mídias mistas e estilos de pintura para criar murais gigantescos representando criaturas estranhas, organizadas através de misturas emocionais estranhas que expressam tanto a crueza quanto a ternura. Sua arte possui cores vibrantes e atmosferas fantásticas semelhantes às da ficção científica. Geralmente, os murais de Aryz retratam seres humanos ou animais de cores surreais, brincando entre o surrealismo e a Pop Art, com silhuetas que revelam suas entranhas, órgãos ou partes, tentando explorar o interior dos seres vivos.
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y0zqPrtY23Y" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalArtistas2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Kobra</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                    Da periferia de São Paulo para o mundo. Nascido em 1975 no Jardim Martinica, bairro pobre da zona sul paulistana, o artista Eduardo Kobra tornou-se um dos mais reconhecidos muralistas da atualidade, com obras em 5 continentes.
                </p>
                <p>
                    Desde os Jogos Olímpicos do Rio, em 2016, ele detém o recorde de maior mural grafitado do mundo – primeiro com ‘Etnias’, pintado para celebrar o evento, com 2,5 mil metros quadrados; marca superada por ele mesmo em 2017, com uma obra em homenagem ao chocolate que ocupa um paredão de 5.742 metros quadrados às margens da Rodovia Castello Branco, na Região Metropolitana de São Paulo.
                </p>
                <p>
                    Uma de suas obras mais famosas é ‘O Beijo’, executada em 2012 no High Line, em Nova York – apagada quatro anos mais tarde. Trata-se de uma releitura cheia de cores da imagem feita pelo fotojornalista norte-americano Alfred Eisenstaedt (1898-1995) em 13 de agosto de 1945, quando o povo saiu às ruas para comemorar o fim da Segunda Guerra Mundial.
                </p>
                <p>
                    Kobra começou a desenhar em muros na clandestinidade, como pichador, ainda durante a adolescência. O gosto pela espontânea arte de rua já era visível no garoto, que colecionava advertências por intervenções não autorizadas na escola e chegou a ser detido três vezes por crime ambiental – justamente por conta do uso irregular de sprays em muros das redondezas.
                </p>
                <p>
                    Nos anos 1990, trabalhou fazendo cartazes, pintando cenários de brinquedos e criando imagens decorativas para eventos naquele que era o maior parque de diversões do Brasil. Era a primeira vez que ele, filho de um tapeceiro e de uma dona de casa, ganhava dinheiro com suas imagens. O trabalho foi bem-sucedido, tanto que lhe rendeu convites para atuar também em outras empresas e junto a agências de publicidade.
                </p>
                <p>
                    Sua arte urbana começou a ganhar visibilidade na década seguinte. Em 2007, apareceu com destaque na mídia pela primeira vez por causa do projeto Muro das Memórias, em que mergulhou no universo das fotos antigas de São Paulo e passou a reproduzi-las nas ruas em tons de sépia ou em preto e branco, apresentando um estilo de grafite diverso daquele que se espalhava pela cidade. Esse projeto acabou se tornando uma marca, embrião de muito do que viria a seguir.
                </p>
                <p>
                    Kobra se tornou um obstinado pesquisador de imagens históricas e não foram poucas as vezes em que tal predileção, estampada em muros gigantescos, acabou servindo para resgatar a importância de lugares e fortalecer a sensação de pertencimento de seus habitantes.
                </p>
                <p>
                    Sua sensibilidade para as mazelas sociais resultou no projeto Realidade Aumentada, em que pintou dez painéis em dez dias em 2015, sempre chamando a atenção para uma questão importante – de uma menina desaparecida a um morador de rua que escreve poemas, passando pela história de uma bailarina de origem pobre da periferia paulistana.
                </p>
                <p>
                    A herança de seu passado no hip-hop é revivida no estilo mais marcante de sua arte: imagens hiper-realistas, muitas vezes baseadas em fotografias de personalidades, como o arquiteto brasileiro Oscar Niemeyer (1907-2012), o artista espanhol Salvador Dalí (1904-1989) e o músico brasileiro Chico Buarque (1944- ), cobertas com cores fortes e contrastantes. Essas cores acabaram se tornando seu principal cartão de visitas ao redor do mundo, o estilo marcante de sua obra. E, em maior ou menor grau, passaram a aparecer em obras das mais diversas fases de sua carreira.
                </p>
                <p>
                    Seu primeiro mural fora do Brasil foi em Lyon, na França, em 2011. Na época, havia sido convidado para ilustrar um paredão de um bairro que passava por processo de revitalização – ou seja, lançou mão de sua vertente Muros da Memória para ajudar na valorização histórica da região. De lá para cá, já pintou em países como Espanha, Itália, Noruega, Inglaterra, Malaui, Índia, Japão, Emirados Árabes Unidos, além de diversas cidades norte-americanas.
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
                <h4 class="modal-title">Kueia</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                Karen Fidelis mais conhecida como “Kueia”, nasceu e cresceu em São Paulo, onde se apaixonou pelo Graffiti. Começou em 1999 seus primeiros traços na parede.
                </p>
                <p>
                Em 2001 Karen foi apelidada de Coelho por um amigo que viu um desenho de coelho em seu caderno, o apelido , fugindo do formato original da palavra coelho, vem do sotaque mineiro que ela ouvia quando viam seus trabalhos, aproveitando assim para assumir o apelido “Kueia” definitivamente.
                </p>
                <p>
                Em Uberlândia para onde se mudou em 2007, Karen se formou e aprofundou seu conhecimento na arte, evoluindo seus traços, desenvolvendo um estilo próprio e também criando sua Tag. A partir daí, começou a ganhar reconhecimento e viajar para muitos lugares para pintar. Em 2016 Karen retornou para São Paulo onde continua batalhando pelo sonho de viver dos seus desenhos.
                </p>
            </div>

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
                <h4 class="modal-title">Crica</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>
                Cristiane Monteiro mais conhecida como Crica, ou seja, meu vulgo/apelido, que assino em todos os meus trabalhos, do graffiti à ilustração. Meu interesse pelas formas, cores e artes vem através da minha mãe que trabalhava com artes e artesanatos na minha infância, então o desenho sempre foi parte do meu cotidiano. Comecei a fazer graffiti na minha adolescência e aí foi paixão a primeira riscada de spray na parede. Muito curiosa e inquieta com o mundo criativo, caí nas garras do design e me formei em Design de Interfaces Digitais. E nesse leque eu também pude juntar o meu outro amor, a ilustração.
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
