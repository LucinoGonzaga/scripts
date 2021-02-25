
$(function () {
    /*    $('img').error(function () {
            var imagem = $(this).attr("src");
            alert('Imagem ' + imagem + ' indisponivel!');
            $('img').attr("src", "../../img/erro.png");
        });
    
        //redimencionar imagem
        $('img').width($(window).width()).height($(window).height());
        $(window).resize(function () {
            $('img').width($(window).width()).height($(window).height());
        });*/

    $(window).scroll(function () {
        var topo = $(window).scrollTop();
        //alert(topo);
        //$(img).fadeOut('1000');
        if(topo>400){
            $('img').fadeOut('10000');
        }
    });
});