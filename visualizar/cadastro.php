
<?php 
include_once("header.php");
?>

<?php
session_start();

?>
<section>
    <div class="container">


        <div class="row justify-content-center mb-4">
            <img src="img/3.png" alt="" width="150" height="200">
        </div>

        <span class="small d-block text-center"><b></b></span>

        <button type="button" class="btn btn-info btn-block mt-2">Cadastre sua conta </button>


        <span class="small d-block text-center">Criando sua conta você tem um Bônus!</span>
        <span class="small d-block text-center">No seu primeiro serviço!</span>

        <form action="formulario.php" method="POST"> <!-- AQUI QUE FAZ LIGAÇÃO COM O BANCO DE DADOS -->
            <div class="input-group mt-2">
                <input type="text" name="nome" class="form-control" maxlength="40" required="" autofocus="" placeholder="Nome completo">
            </div>
            <div class="input-group mt-2">
                <input type="email" name="email" class="form-control" maxlength="50" required="" autofocus="" placeholder="Email">
            </div>
            <div class="input-group mt-2">
                <input type="text" name="telefone" class="form-control" maxlength="40" required="" autofocus="" placeholder="Telefone">
            </div>
            <div class="form-group rsform-block rsform-block-origem">
                <label class="control-label formControlLabel" data-toggle="tooltip" title="" for="origem" data-original-title="">Como nos conheceu?</label>
                <div class="formControls">
                    <select name="outros" id="origem" class="rsform-select-box form-control"><option value="outros">Outros</option><option value="indicacao">Indicação de Amigo ou Cliente</option><option value="google">Google</option><option value="facebook">Facebook</option><option value="instagram">Instagram</option></select>
                </div>
            </div>
            <!-- maxlength="40" required -->
            <div class="input-group mt-2">
                <input type="text" name="usuario" class="form-control" maxlength="40" required="" autofocus="" placeholder="Usuario">
            </div>
            <div class="input-group mt-2">
                <input type="password" name="senha" class="form-control" maxlength="40" required="" autofocus="" placeholder="********">
            </div> 

            <div class="row">
                <div class="col-md-6">
                    <button type="reset" class="btn btn-secondary btn-block mt-2">CANCELAR</button>
                </div>
                <div class="col-md-6">
                    <button type="submit"  value="Salvar" class="btn btn-info btn-block mt-2">CADASTRAR</button>
                </div>

            </div>


        </form>

        <!-- <a href="login"><button type="button" class="btn btn-info btn-block mt-2">já tem conta!</button></a> -->
    </div>
</section>
<?php include_once("footer.php");?>

<script  src="lib/jquery/jquery.min.js"></script>
<script src="lib/owl-carousel/owl.carousel.js"></script>
<script  src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/efeitos.js"></script>