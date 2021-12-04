<?php 

session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$outros = mysqli_real_escape_string($conexao, trim($_POST['outros']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha']))); /* removendo (md5 e no fica e aspas uma ) para senha mostra no banco de dados */

$sql = "INSERT INTO usuario (nome, email, telefone, outros, usuario, senha, data_cadastro) VALUES ('$nome', '$email', '$telefone', '$outros', '$usuario', '$senha', NOW())"; 


$salvar = mysqli_query($conexao, $sql);
$row = mysqli_affected_rows($conexao);


mysqli_close($conexao);


?>



<section>

    <div class="container">
        <div class="text-center">
            <h1 > Confirmação de Cadastro</h1>
            <hr><br><br>
        </div>

        <?php

        if($row == 1){
            header('Location: feito');
            exit;
        }else{
           
            header('Location: cadastroNaoefetuado');
            exit;
        }
        ?>

    </div>
</section>

<script  src="lib/jquery/jquery.min.js"></script>
<script src="lib/owl-carousel/owl.carousel.js"></script>
<script  src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/efeitos.js"></script>



