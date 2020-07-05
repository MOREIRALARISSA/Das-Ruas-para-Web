<?php 
    $url = explode("/", $_SERVER['REQUEST_URI']);
    $resultado = in_array('_authors', $url);
?>


<footer class="colorf" role="navigation">

    <div class="row text-center mt-0 mr-0" role="menu">
        <div class="col-lg-4  mt-4 mb-4 centraliza d-none d-lg-block">
            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>index.php" role="menuitem">Home</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>historia-do-grafite.php" role="menuitem">História do Grafite</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>grafite-no-mundo.php" role="menuitem">Grafite no Mundo</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>mitos-e-verdades.php" role="menuitem">Mitos e Verdades</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>grafite-x-sociedade.php" role="menuitem">Grafite x Sociedade</a></div>
        </div>


        <div class="col-lg-4 mt-4 mb-4 centraliza d-sm-none d-none d-lg-block">

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>estilos.php" role="menuitem">Estilos</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>_authors/igor/index.php" role="menuitem">Freestyle</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>_authors/anderson/index.php" role="menuitem">Throwup</a></div>

            <div class="nav-link disabled"><a href="<?php echo !$resultado ? "" : "../../" ;?>_authors/matheus/index.php" role="menuitem">Stencil</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>_authors/larissa/index.php" role="menuitem">Mural</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>_authors/adelina/index.php" role="menuitem">3D</a></div>
        </div>


        <div class="col-lg-4 mt-4 mb-4 centraliza d-none d-lg-block">

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>news.php" role="menuitem">News</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>contato.php" role="menuitem">Contato</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>quem-somos.php" role="menuitem">Quem Somos</a></div>

            <div class=""><a href="<?php echo !$resultado ? "" : "../../" ;?>normas-de-utilizacao.php" role="menuitem">Normas de utilização</a></div>
        </div>

    </div>

    <div class="copy" role="contentinfo">
        <small>Copyright 2019 | ᴅᴀs ʀᴜᴀs ᴘᴀʀᴀ ᴡᴇʙ </small>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>



</body>

</html>