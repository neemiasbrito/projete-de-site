php 

include_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email']; 
$senha = $_POST['senha'];
$sql = "insert into usuarios (nome,email,senha) values ('$nome','$email','$senha')";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
<section>

    <div class="container">
        <div class="text-center">
            <h1 > Confirmação de Cadastro</h1>
            <hr><br><br>
        </div>

            <?php

            if($linhas == 1){
                print "cadastro efetuado com sucesso!";
            }else{
                print "Cadastro Não efetuado.<br>Já existe um usuário com este e-mail!";
            }
            ?>

    </div>
</section>

<script  src="lib/jquery/jquery.min.js"></script>
<script src="lib/owl-carousel/owl.carousel.js"></script>
<script  src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/efeitos.js"></script>



