<?php include_once("header.php");?>

<section>
    <div class="container">


        <div class="row justify-content-center mb-4">
            <img src="img/3.png" alt="" width="150" height="250">
        </div>
        <span class="small d-block text-center">Cadastre com sua conta <b>Google</b></span>

        <button type="button" class="btn btn-info btn-block mt-2">Google</button>


        <span class="small d-block text-center">ou</span>
        <span class="small d-block text-center">Crie um novo Cadastro</span>

        <form action="">
            <div class="input-group mt-2">
                <input type="text" class="form-control bg-light btn-outline-secondary"  placeholder="Nome completo">
            </div>
            <div class="input-group mt-2">
                <input type="text" class="form-control bg-light btn-outline-secondary" placeholder="Email">
            </div>
            <div class="input-group mt-2">
                <input type="text" class="form-control bg-light btn-outline-secondary" placeholder="Telefone">
            </div>
            <div class="form-group rsform-block rsform-block-origem">
                <label class="control-label formControlLabel" data-toggle="tooltip" title="" for="origem" data-original-title="">Como nos conheceu?</label>
                <div class="formControls">
                    <select name="form[origem][]" id="origem" class="rsform-select-box form-control"><option value="outros">Outros</option><option value="indicacao">Indicação de Amigo ou Cliente</option><option value="google">Google</option><option value="facebook">Facebook</option><option value="instagram">Instagram</option></select>
                </div>
            </div>
 <!-- maxlength="40" required -->
            <div class="input-group mt-2">
                <input type="text" class="form-control bg-light btn-outline-secondary" placeholder="Login">
            </div>
            <div class="input-group mt-2">
                <input type="password" class="form-control bg-light btn-outline-secondary" placeholder="********">
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

        <a href="login"><button type="button" class="btn btn-info btn-block mt-2">já tem conta!</button></a>
    </div>
</section>
<?php include_once("footer.php");?>

<script  src="lib/jquery/jquery.min.js"></script>
<script src="lib/owl-carousel/owl.carousel.js"></script>
<script  src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/efeitos.js"></script>