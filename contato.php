<?php
    include ('_templates/header.php');
    //Incluido o menu de navegação
?>
    <main>
        
        <div class="container">
            <div class="row justify-content-center">
                <form class="col-md-8 m-3" method="POST">
                    <section>
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
                    </section>
                </form>
            </div>
        </div>
            
    </main>

<?php

    include ('_templates/footer.php');
    //Incluindo o rodapé
?>