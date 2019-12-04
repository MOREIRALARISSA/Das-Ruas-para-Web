<?php
    include ('../../_templates/header.php');
    //Incluindo o menu de navegação
?>

<main>

    <div class="jumbotron junbotrom-fluid">

        <div class="container">

            <div class="row">

                <div class="col-12 text-center">

                    <h1 class="display-4 font-weight-bold">Stencil</h1>

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
                        
                        <!-- Sobre -->

                        <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                            <article>
                                <div class="row justify-content-center">

                                    <div class="col-lg-4 offset-lg-0 order-lg-first col-md-5 offset-md-1 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center">
                                        <img src="../../_images/matheus/sobre1.jpg" class="img-fluid" alt="metade do grafite Menina com balão do Banksy, menina com a mão para cima  " />
                                    </div>



                                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 order-md-first order-sm-first order-first">

                                        <p>
                                            Um estêncil (do inglês Stencil) é uma técnica de pintura utilizada para aplicar um desenho sobre qualquer superfície, com o uso de tinta, sendo aerossol ou não, o stencil é feito com papel, plástico, metal ou acetato, onde tem uma boa durabilidade e seja fácil de cortar, para fazer a forma do desenho.
                                            O inicio do stencil segundo alguns autores foi nos países orientais na China e no Japão nos anos 500 a.c. onde era utilizado com elementos naturais, como folhas e rochas, para fazer as máscaras das partes que não podia cobrir com a tinta.
                                            Durante a segunda guerra mundial teve um grande uso dessa técnica de stencil para fazer intervenções urbanas, sendo utilizada para fazer propagandas da guerra e como forma de impressão nos uniformes e matérias da guerra.
                                            O stencil serve de matriz para impressão por mimeógrafo e a base da pintura serigráfica.
                                            Hoje em dia o Stencil Art se tornou um novo movimento artístico, urbano, feito na rua e para a rua, com desenhos cada vez mais elaborados, com cortes eletrônicos, onde possibilita muito mais a criatividade do artista, hoje as pinturas com stencil tem varias camadas e cores, fazendo pinturas realistas de alta qualidade.
                                            Onde fica até difícil saber se a pintura foi feita com stencil ou a mão livre.
                                        </p>

                                    </div>


                                    <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-6 offset-sm-0 pl-0 pr-0 col-6 text-center">

                                        <img src="../../_images/matheus/sobre2.jpg" class="img-fluid" alt="metade do grafite Menina com balão do Banksy, balão com formato de coração" />

                                    </div>
                                </div>
                            </article>
                        </div>
                        
                        <!-- Artistas -->

                        <div class="tab-pane fade show " id="nav-item-02" role="tabpanel">

                            <section>

                                <h2 class="text-center d-none">Artistas</h2>

                                <div class="row justify-content-lg-center my-5">

                                    <div class="col-lg-4">

                                        <div class="card">

                                            <div class="card-fundo"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/matheus/bansky.jpg" alt="grafite do Banksy, macaco com uma câmera">
                                            </div>
                                            <div class="card-body">

                                                <h3 class="card-title font-weight-bold" >Banksy</h3>
                                                <h4 class="card-subtitle mb-2 text-muted">Desconhecido</h4>
                                                <p class="card-text">É um veterano artista de rua britânico</p>
                                            </div>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: 1974 (idade 45 anos), Bristol, Reino Unido</li>

                                                <li class="list-group-item">Diretor de cinema, Pintor, Ativista político, Artivista, Artista de rua, Escritor e Escultor </li>

                                            </ul>

                                            <div class="card-body">
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas">Saiba mais</a>

                                            </div>

                                        </div>

                                    </div>


                                    <div class="col-lg-4">

                                        <div class="card">


                                            <div class="card-fundo2"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/matheus/izolag.jpg" alt="grafite do Izolag, com ele mesmo se olhando no espelho">
                                            </div>
                                            <div class="card-body">

                                                <h3 class="card-title font-weight-bold" >Izolag</h3>
                                                <h4 class="card-subtitle mb-2 text-muted">Rodrigo Izolag

                                                </h4>
                                                <p class="card-text">Seu trabalho se caracteriza pelo muralismo
                                                    urbano, onde mistura pintura e grafite,
                                                    ampliando fotografias na técnica do stencil.</p>
                                            </div>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascido no Rio de Janeiro</li>

                                                <li class="list-group-item">Muralista e grafiteiro</li>

                                            </ul>

                                            <div class="card-body">
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas2">Saiba mais</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="row justify-content-lg-center mb-5">

                                    <div class="col-lg-4">

                                        <div class="card">

                                            <div class="card-fundo3"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/matheus/blek-le-rat.jpg" alt="Grafite do Blek-le-rat, dois ratos">
                                            </div>
                                            <div class="card-body">

                                                <h3 class="card-title font-weight-bold" >Blek le Rat</h3>
                                                <h4 class="card-subtitle mb-2 text-muted">Xavier Prou</h4>
                                                <p class="card-text">É um artista francês que nasceu em Paris em 1951 e é conhecido por muitos como sendo o “pai do stencil”.</p>
                                            </div>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: 1951 (idade 68 anos), Boulogne-Billancourt, França</li>

                                                <li class="list-group-item">Artista francês</li>

                                            </ul>

                                            <div class="card-body">
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas3">Saiba mais</a>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-4">

                                        <div class="card">


                                            <div class="card-fundo4"></div>
                                            <div class="avatar mx-auto">
                                                <img src="../../_images/matheus/shepard.jpg" alt="Foto de perfil do Frank Shepard Fairey ">
                                            </div>
                                            <div class="card-body">

                                                <h3 class="card-title font-weight-bold" >Shepard Fairey</h3>
                                                <h4 class="card-subtitle mb-2 text-muted">Frank Shepard Fairey</h4>
                                                <p class="card-text">É um veterano artista de rua britânico</p>
                                            </div>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Nascimento: 15 de fevereiro de 1970 (idade 49 anos), Charleston, Carolina do Sul, EUA</li>

                                                <li class="list-group-item">Artista de rua contemporâneo americano, designer gráfico, ativista, ilustrador e fundador da OBEY Clothing </li>

                                            </ul>

                                            <div class="card-body">
                                                <a href="#" class="card-link" data-toggle="modal" data-target="#modalArtistas4">Saiba mais</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </section>



                        </div>
                        
                        <!-- Galeria -->

                        <div class="tab-pane fade show " id="nav-item-03" role="tabpanel">

                            <section>
                                <h2 class="d-none">Galeria</h2>
                                <article>
                                   
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="../../_images/matheus/banksy-g1.jpg" alt="Grafite do Banksy, menino ao lado de uma fogueira envolto de fumaça" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Stencil</em> feito por <strong>Banksy</strong> 
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="../../_images/matheus/banksy-g2.jpg"  alt="Grafite do Banksy, Um robo desenhando um código de barras" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Stencil</em> feito por <strong>Banksy</strong> 
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mb-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="../../_images/matheus/izolag-g3.jpg" alt="Grafite de um menino envolto de círculos pretos" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Stencil</em> feito por <strong>Izolag</strong> 
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="w-100 d-none d-lg-block"></div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="../../_images/matheus/izolag-g4.jpg"  alt="Grafite do Izolag com um cara com óculos de sol" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Stencil</em> feito por <strong>Izolag</strong> 
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid" src="../../_images/matheus/shepard-g5.jpg"  alt="Grafite do Shepard Fairey, Barack Obama com a frase Hope na frente" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Stencil</em> feito por <strong>Shepard Fairey</strong> 
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center mt-4">
                                            <figure class="gallery_border">
                                                <img class="img-fluid gallery_adjust" src="../../_images/matheus/shepard-g6.jpg"  alt="Grafite do Shepard Fairey, mulher passando batom" />
                                                <figcaption class="mt-2">
                                                    Grafite <em>Stencil</em> feito por <strong>Shepard Fairey</strong> 
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

<div class="modal fade" id="modalArtistas" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Banksy</h4>
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

<div class="modal fade" id="modalArtistas2" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Izolag</h4>
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

<div class="modal fade" id="modalArtistas3" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Bleck Le Rat</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>Xavier Prou, mais conhecido como Blek le Rat, é um artista francês que nasceu em Paris em 1951 e é conhecido por muitos como sendo o “pai do stencil”.</p>
                <figure>
                    <img class="img-fluid" src="../../_images/matheus/le-rat-modal.jpg" alt="Bleck Le Rat em frente a um de seus Grafites" />
                    <figcaption>
                        Foto Fauno Cultural/Divulgação.
                    </figcaption>
                </figure>
                <p>A voz de Bleck Le Rat foi bombardeada nas ruas de Paris nos anos 80, sendo que o stencil de rato sempre possuiu um tom de protesto político amarrado. Foi um dos pontos que deu o “start” do graffiti na Cidade Luz.</p>
                <p>A importância de Le Rat para o cenário da street art é tão grande que ele influenciou muitos outros gigantes que viriam depois dele, como Banksy e Shepard Fairey (Obey).</p>
                <p>Na verdade, tudo começou quando Xavier Prou teve seu primeiro contato com o graffiti em uma visita que fez à Nova York. O subúrbio estava coberto de bombs, tags e desenhos nos metrôs, quadras de basquete e pelas ruas da cidade americana.</p>
                <p>Esta estética mexeu com O artista e o deixou inquieto, pois nunca ele tinha visto tal manifestação na sua cidade. Nesta época, havia apenas propaganda política e cartazes nas ruas de Paris.</p>
                <p>
                    Depois de quase 10 anos maturando ideias, estudando arquitetura, espaços públicos e técnicas como xilo e serigrafia, inspirado pela arte de David Hockney, deu-se início à história de Blek Le Rat.
                    A assinatura / nome “Blek Le Rat” tem origem em dois fatores completamente distintos. O “Blek” surgiu inspirado por um quadrinho italiano que o artista lia na infância chamado “Blek Le Roc”.

                    Já o “Le Rat” veio em virtude do artista constantemente soltar seus stencils de ratos pelas ruas do seu bairro no decorrer da noite.</p>
                <figure>
                    <img class="img-fluid" src="../../_images/matheus/le-rat-modal2.jpg" alt="Pintura de um grafite de rato, através do molde para Stencil" />
                    <figcaption>
                        Foto Fauno Cultural/Divulgação.
                    </figcaption>
                </figure>
                <p>O artista sofreu diversos processos ao longo de sua carreira e, em 1991, foi forçado a parar de pintar nas ruas para se livrar da cadeia.

                    Por este motivo, ele passou a focar seus esforços e seu talento em produções de telas e posteres criados no seu ateliê. O legado do cara é vivo, incontestável e totalmente atual. </p>
                <p>Assim, voltando lá para o começo do post, são por esses e outros motivos que afirmamos com toda a convicção que o artista pode ser considerado como um dos nomes mais importantes e uma das principais referências históricas do graffiti e do stencil.

                    Para finalizar, separamos uma frase do grande Banksy que ilustra bem o que estamos tentando expressar com esse post:

                    “Toda vez que eu penso que pintei algo um pouco original, descubro que Blek Le Rat já havia feito também, só que vinte anos antes.”
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalArtistas4" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Shepard Fairey</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>Frank Shepard Fairey (nascido em 15 de fevereiro de 1970) é um artista de rua contemporâneo americano, designer gráfico, ativista, ilustrador e fundador da OBEY Clothing que surgiu da cena do skate. </p>
                <p>Ele se tornou amplamente conhecido durante a eleição presidencial dos EUA em 2008 por seu pôster de "Hope" de Barack Obama.</p>
                <figure>
                    <img class="img-fluid" src="../../_images/matheus/hope.jpg" alt="Shepard Fairey, em frente a um de seus grafites" />
                    <figcaption>
                        Foto Fauno Cultural/Divulgação.
                    </figcaption>
                </figure>
                <p>O Instituto de Arte Contemporânea de Boston o descreveu como um dos artistas de rua mais conhecidos e mais influentes. Seu trabalho está incluído nas coleções do The Smithsonian, no Museu de Arte do Condado de Los Angeles, no Museu de Arte Moderna de Nova York, no Museu de Arte Contemporânea de San Diego, na National Portrait Gallery em Washington, DC, no Virginia Museum of Belas Artes em Richmond e o Victoria and Albert Museum em Londres.</p>
                <p>Em 1989, Fairey criou o adesivo “André the Giant Has a Posse”, que se tornou um fenômeno mundial.

                    Foi a partir daí que o prestigiadíssimo projeto “Obey Giant” teve início, onde o artista se utiliza do mesmo conceito, porém muda o estilo e a semântica de acordo com cada trabalho.</p>
                <p>O Obey Giant tem como objetivo inspirar a curiosidade das pessoas e levá-las à questionar o seu relacionamento com o ambiente que as cercam, assim como qual a razão e o sentido daqueles adesivos / cartazes estarem ali.

                    O mais interessante é que essa campanha ganhou uma dimensão absurda por acaso, ultrapassando todas as expectativas do próprio artista.</p>
                <figure>
                    <img class="img-fluid" src="../../_images/matheus/obey.jpg" alt="Grafite da Marca Obey" />
                    <figcaption>
                        Foto Fauno Cultural/Divulgação.
                    </figcaption>
                </figure>

                <p>Essa sacada foi simplesmente genial, pois as pessoas, de uma forma geral, não estão acostumadas a ver anúncios, cartazes publicitários ou mesmo comerciais em que o motivo / finalidade não esteja claro.

                    O Obey Giant provoca essa reflexão e até uma possível frustração em quem se encontra com ele, porém revitaliza a percepção do espectador com os detalhes, uma vez que o espectador precisa processar a informação e fica tentando estabelecer conexões e decifrar a mensagem e o por quê daquela intervenção artística estar naquele determinado lugar.

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