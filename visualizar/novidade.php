<?php include_once("header.php");?>

<section>

    <div class="container" id="destaque-produtos-container">

        <div id="destaque-produtos">

            <div class="item">

                <div class="col-sm-12 col-imagem">
                    <center><a href="https://deals.dell.com/pt-br/category/notebooks?mpt=1560786757&mpcr=102592878&mpcrset=root&gclid=Cj0KCQiAxrbwBRCoARIsABEc9sgpH_ROktcZdHMy8eyMvMYVwUNhwfi_RNVTqit3MxWuoGm8piK7cVMaAlPREALw_wcB&dgc=ba&dgseg=dhs&cid=251366&lid=2056&acd=12255251366205611c102592878&VEN3=811105235354941734"><img src="img/Notebook-dell-promoção-2017-comprar-brasil.jpg" alt="Nome do Produto" class="img-fluid5"></a></center>
                </div>
                <center><b><p>Clique e Confira As O fertas da Dell!</p></b></center>

            </div>

            <div class="item">

                <div class="col-sm-12 col-imagem">
                    <center><img src="img/criaco-de-sites-profissional-responsivo.jpg" alt="Nome do Produto" class="img-fluid5"></center>
                </div>
                <center><b><p>Criamos Sites Responsivo Pra Seu Negócio!</p></b></center>

            </div>

            <div class="item">

                <div class="col-sm-12 col-imagem">
                    <center><img src="img/processor_cpu_upgrade_installation_chip_robot_5633_1920x1080.jpg" alt="Nome do Produto" class="img-fluid6"></center>
                </div>
                <center><b><p>Deixe com HNR que deixaremos novo seu Hardawre e software!</p></b></center>

            </div>
            <div class="item">

                <div class="col-sm-12 col-imagem">
                    <center><img src="img/bannerer1920x1080.jpg" alt="Nome do Produto" class="img-fluid7"></center>
                </div>
                <center><b><p>Limpeza do seu Hardawre!</p></b></center>

            </div>

            <div class="item">

                <div class="col-sm-12 col-imagem">
                    <center><img src="img/instalacao-de-programa_7.jpg" alt="Nome do Produto" class="img-fluid8"></center>
                </div>
                <center><b><p>Formatamos e deixamos com seus programas favoritos!</p></b></center>

            </div>
            <div class="item">

                <div class="col-sm-12 col-imagem">
                    <center><img src="img/code_programming_symbols_140997_960x544.jpg" alt="Nome do Produto" class="img-fluid9"></center>
                </div>
                <center><b><p>Criação do seu projeto 100% em linguagem de programação</p></b></center>

            </div>

            <div class="item">

                <div class="col-sm-12 col-imagem">
                    <center><a href="https://g.page/hnrinformatica?shar"><img src="img/Captura de Tela (22).png" alt="Nome do Produto" class="img-fluid10"></a> </center>
                </div>
                <center><b><p>Serviços de informática e criação de sites!</p></b></center>

            </div>

        </div>

        <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
        <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

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

