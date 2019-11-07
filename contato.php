<?php
    include ('_templates/header.php');
    //Incluido o menu de navegação
?>
    <main>

    <div class="row justify-content-center">
        <h1>Contato</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
            <form method="GET" action="get">
                <fieldset>
                    <label> Nome </label>
                    <input type="text" maxlength="30" name="nome" placeholder="Digite aqui..." required /><br>

                    <label> E-mail </label>
                    <input type="email" maxlength="50" name="email" placeholder="Digite aqui..." required /><br>    

                    <label> Mensagem </label>
                    <textarea style="resize: vertical" placeholder="Digite sua mensagem..." required></textarea>
                </fieldset>
            </form>
        </div>
    </div>

    </main>

<?php

    include ('_templates/footer.php');
    //Incluindo o rodapé
?>