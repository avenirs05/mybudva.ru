$(function () {

    $('#carousel-main-screen').carousel();
    $('#carousel-gallery-mob').carousel();
    $('.burger-menu').click(function() { $('#modal-menu').modal('show'); });

    $("#lightgallery").lightGallery( { showThumbByDefault: true } );

    // $('.btn-callback').click(function() { $('#modal-free-consult').modal('show'); });  
   
    // Выделение цветом нужной страницы
    var location = window.location.href;  
    $('.menu-wrapper a').each(function() {  
        var link = $(this).attr('href');
        if (location == link) { 
            $(this).addClass('change-color');                
        }
    }); 


    //Прижать футер к низу
    if ($(document).height() <= $(window).height()) {
      $(".footer").addClass("navbar-fixed-bottom");
    }




    // Уменьшение изображения в галерее
    // $('#lightgallery img').width('82');
    // $('#lightgallery img').height('54');  

});
