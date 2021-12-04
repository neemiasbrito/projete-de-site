<?php
$hostname = "sql207.epizy.com";
$user = "epiz_24998300";
$password = "dKWu8ohETH3Zv8b";
$database = "epiz_24998300_usuarios";
$conexao = mysqli_connect($hostname,$user,$password,$database);
    


if(!$conexao){
    
    print "Falha na conexão com o Banco de Dados";
}
    
?>