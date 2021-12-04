<?php
require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");

    }
);

$app->get(
    '/home',
    function () {

        require_once("view/index.php");

    }
);


$app->get(
    '/novidade',
    function () {

        require_once("view/novidade.php");

    }
);



$app->get(
    '/contato',
    function () {

        require_once("view/contato.php");

    }
);

$app->get(
    '/cadastro',
    function () {

        require_once("view/cadastro.php");

    }
);


$app->get(
    '/login',
    function () {

        require_once("view/cadastro1.php");

    }
);

$app->get(
    '/feito',
    function () {

        require_once("view/cadastro-feito.php");

    }
);

$app->get(
    '/cadastroNaoefetuado',
    function () {

        require_once("view/cadastro-não-feito.php");

    }
);



$app->get(
    '/processa.php',
    function () {

        require_once("view/processa.php");

    }
);






//$app->get("/produto-:id_prod", function($id_prod){

  //  $sql = new Sql();

   /* $produtos = $sql->select("SELECT * FROM tb_produtos WHERE id_prod = $id_prod");

    $produto = $produtos[0];

    $preco = $produto['preco'];
    $centavos = explode(".", $preco);
    $produto['preco'] = number_format($preco, 0, ",", ".");
    $produto['centavos'] = end($centavos);
    $produto['parcelas'] = 10;
    $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
    $produto['total'] = number_format($preco, 2, ",", ".");

    require_once("view/shop-produto.php");

});

*/


$app->get(
    '/cart',
    function () {
        
        require_once("view/cart.php");
        
    }
);




$app->run();


