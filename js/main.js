$(function () {

    $('#carousel-main-screen').carousel();
    $('#carousel-gallery-mob').carousel({ interval: false });
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

    
    // Подкрашивание цветом текущего пункта меню
    function changeColorMenuItem () {
        var location = window.location.href;  
        var color = '#FFFF33';

        if ( location.match(/index.php/) ) {
            $('#main-link').css('color', color);        
        }
        if ( location.match(/villa/) ) {
            $('#villa-link').css('color', color);        
        }
        if ( location.match(/apartment/) ) {
            $('#apartment-link').css('color', color);        
        }
        if ( location.match(/feedback/) ) {
            $('#feedback-link').css('color', color);        
        }
        if ( location.match(/contacts/) ) {
            $('#contacts-link').css('color', color);        
        }
    }

    changeColorMenuItem ();


    // Уменьшение изображения в галерее
    $('#lightgallery img').width('65');
    $('#lightgallery img').height('43');  


    //Динамическое изменение текста в title
    if ( location.match(/index.php/) ) {
        $('title').text('Аренда вилл и апартаментов в Черногории');        
    }
    if ( location.match(/villa$/) ) {
        $('title').text('Виллы');        
    }
    if ( location.match(/apartment$/) ) {
        $('title').text('Апартаменты');       
    }
    if ( location.match(/feedback$/) ) {
        $('title').text('Отзывы');        
    }
    if ( location.match(/contacts$/) ) {
        $('title').text('Контакты');        
    }
    if ( location.match(/single/) ) {
        $('title').text( $('#in-title').text() );     
    }

});
