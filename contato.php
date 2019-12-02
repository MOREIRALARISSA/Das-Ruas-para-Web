<?php
    include ('_templates/header.php');
    //Incluido o menu de navegação
?>

<main class="mb-5">
    <div class="container">
        <article>
            <h2 class="d-none">Contato</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 offset-lg-0 order-lg-first col-md-4 offset-md-0 col-sm-5 offset-sm-0 col-5 text-center align-self-center pl-0 pr-0">
                    <img class="img-fluid mt-4" src="./_images/contato/half-1.jpg" title="Primeria metade de um grafite de um robô" alt="Primeria metade de um grafite de um robô" />
                </div>
                <form class="col-lg-5 offset-lg-0 col-md-12 offset-md-2 order-md-first order-sm-first order-first m-3" method="POST">
                    <h2 class="text-center">Contato</h2>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome...">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email...">
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="textarea">Mensagem</label>
                        <textarea class="form-control" id="textarea" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviado">Enviar</button>
                </form>
                <div class="col-lg-3 offset-lg-0 col-md-4 offset-md-0 col-sm-5 offset-sm-0 col-5 text-center align-self-center pl-0 pr-0">
                    <img class="img-fluid mt-4" src="./_images/contato/half-2.jpg" title="Segunda metade de um grafite de um robô" alt="Segunda metade de um grafite de um robô" />
                </div>
            </div>
        </article>
    </div>
</main>

<?php

    include ('_templates/footer.php');
    //Incluindo o rodapé
?>