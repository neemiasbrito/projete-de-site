<?php include_once("header.php");?>


<section>

    <div id="banner">

        <h1>&nbsp;&nbsp;&nbsp;&nbsp;HNR<small>INFORMÁTICA</small></h1>

    </div>
    <br>
     <div id="news" class="container">

        <div>
            <h2>NOSSOS SERVIÇOS</h2>

        </div>
    </div>
    <br>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <img src="img/criação de sites.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <center><h2>CRIAÇÃO DE SITES</h2></center>
                <p>Analisamos a ideia do seu projeto para traçamos um esboço inicial do que será executado. É o momento de captar a essência do projeto.
                    O momento de arquiteta a melhor forma de executar o projeto, para atingir o objetivo desejado, de maneira eficaz.
                    Na criação do sites e hora de colocar as ideias em prática para deixamos seu site prático e funcional.</p>
            </div>

        </div>
    </div>
    <br><br><br><br><br>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <center><h2>LIMPEZA DO HARDAWARE</h2></center> 
                <p>Travamentos e aquecimento podem ser causados, entre outras razões, por causa de poeira interna, emperrando ventiladores ou causando mau-contato.
                    A limpeza dos componentes internos de hardware (peças presentes no interior de um gabinete) é de extrema importância no complemento da manutenção preventiva/corretiva de seu equipamento. Este procedimento aumenta a vida útil do equipamento e evita desgastes e falhas prematuras dos componentes de hardware que geralmente são afetados pelo aquecimento excessivos no interior do gabinete.</p>
            </div>
            <div class="col-md-6">
                <center><img src="img/formatar-com-windows.jpg" class="img-fluid1"></center>
            </div>

        </div>
    </div>
    <br><br><br><br><br>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <img src="img/driver-stepper-motor-4683164_640.jpg" class="img-fluid2">
            </div>
            <div class="col-md-6">
                <center><h2>FORMATAÇÃO</h2></center>
                <p>FORMATAÇÃO DE PC E NOTEBOOK Depois de um tempo de uso é necessário fazer uma formatação em seu computador para manter sua vida útil e na HNR INFORMÁTICA grantimos uma formatação de primeira. Formatar suas máquina, seja ela pc ou notebook, é uma necessidade que vai aparecer para todos no decorrer do tempo. Muitos fatores podem fazer com que seja preciso realizar a formatação e reinstalação do sistema operacional da sua máquina, como vírus, travamentos e diversos outros fatores.</p>
            </div>

        </div>
    </div>
    <br><br><br><br><br>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <center><h2>INSTALAÇÃO DE APLICATIVOS</h2></center> 
                <p> Programas indispensáveis para um PC Windows Quando compramos um computador novo, seja um PC desktop ou portátil , a mesma pergunta aparece sempre:  que programas devemos instalar? Uma pergunta que a InfoComputer vai tratar de solucionar através deste post. Sabemos que fazer uma selecção de softwares essenciais para uma PC Windows é um pouco complicado, especialmente porque esta selecção vai variar de acordo com as [...]A quantidade de software disponível é enorme, e é possível que deixemos de fora algum programa na nossa seleção, que para ti possa ser um dos mais essenciais. são os programas que mais vais precisar no teu dia-a-dia, e mais cedo ou mais tarde vais acabar por utilizar.</p>
            </div>
            <div class="col-md-6">
                <center><img src="img/imagens - 1280x850 (1).jpg" class="img-fluid3"></center>
            </div>

        </div>
    </div>
    <br><br><br><br><br>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <center><h2>REDE/INTERNET</h2></center> 
                <p>Redes Instalação e Configuração de roteadores, switch, repetidores, modem, Cabeamento e Configuração de Rede, Instalação e Configuração na sua casa, cripagem de conectores RJ-45, troca de Senha WI-FI com bloqueando com MAC, troca de cabos cat5/6/7.</p>
            </div>
            <div class="col-md-6">
                <center><img src="img/wifi_logo_sign_110908_960x544.jpg" class="img-fluid4"></center>
            </div>

        </div>
    </div>

    <div id="call-to-action" class="container">
        <div class="text-center">
            <div class="row-row-max-400">
<h6 class="text-center">DEUS SEJA LOUVADO © 2020. </h6>
                <div class="col-xs-6">
                    <a href="novidade" class="btn btn-roxo">NOVIDADES</a>
                </div>
                <div class="col-xs-6">
                    <a href="cadastro" class="btn btn-amarelo">REGISTER</a>
                </div>
            </div>
        </div>
    </div>



</section>

<?php include_once("footer.php");?>

<script>
    $(function(){

        $("#destaque-produtos").owlCarousel({

            autoPlay: 5000,
            items : 1,
            singleItem: true

        });

        var owlDestaque = $("#destaque-produtos").data('owlCarousel');

        $('#btn-destaque-prev').on("click", function(){

            owlDestaque.prev();

        });

        $('#btn-destaque-next').on("click", function(){

            owlDestaque.next();

        });

    });
</script>

