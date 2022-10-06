$(document).ready(function(){

    $("#logotipo1").on("mouseover",function(){


        $("#banner h1").addClass("efeito");

    }).on("mouseout", function(){

        $("#banner h1").removeClass("efeito");
    });

    $("#input-search").on("focus", function(){
        $("li.search").addClass("ativo");

    }).on("blur", function(){
        $("li.search").removeClass("ativo");
    });



    $(".thumbnails").owlCarousel({
        loop:true,
        margin: 10,
        nav:true,
        navtext: ["Anterior", "Próximo"],
        resposive: {
            0: {
                items: 1
            },
            480: {
                items: 3
            },
            1000: {
                items: 4
            },


        }   

    });


    let owl = $(".thumbnails").data('owlCarousel');

    $('#btn-news-prev').on("click", function(){

        owl.prev();

    });

    $('#btn-news-next').on("click", function(){

        owl.next();

    });
    
    
    
    $("#btn-bars").on("click", function(){

      $("header").toggleClass("open-menu");

    });

    $("#menu-mobile-mask, .btn-close").on("click", function(){

      $("header").removeClass("open-menu");


    });

    $("#btn-search").on("click", function(){

      $("header").toggleClass("open-search");
      $("#input-search-mobile").focus();

    });


});
