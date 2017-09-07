<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
    
    <title>Недвижимость</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="/imgs/fav.ico" type="image/png">
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">    
    <link href="/style.css" rel="stylesheet">

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/lightgallery.min.js"></script>
    <script src="/js/lg-thumbnail.min.js"></script>

    <script>    
        $(function () {
            $('#carousel-main-screen').carousel();
            $('#carousel-gallery-mob').carousel();
            $("#lightgallery").lightGallery( { showThumbByDefault: true });

            $('.btn-callback').click(function() { $('#modal-free-consult').modal('show'); });
            $('.burger-menu').click(function() { $('#modal-menu').modal('show'); });

            $('[data-toggle="tooltip"]').tooltip();
            
            // Выделение цветом нужной страницы
            var location = window.location.href;  
            $('.menu-wrapper a').each(function () {  
                var link = $(this).attr('href');
                if (location == link) { 
                    $(this).addClass('change-color');                
                }
            }); 
            // Конец. Выделение цветом нужной страницы 

            // Прижать футер к низу
            if ($(document).height() <= $(window).height()) {
              $(".footer").addClass("navbar-fixed-bottom");
            }
            // Конец. Прижать футер к низу

        });
    </script>
    <style>
        body{
          padding-right: 0 !important;     
        }
        @font-face {
            font-family: "OpenSansCondensedLight";
            src: url("/fonts/OpenSans-CondLight.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;  
        }
    </style>

</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top visible-md-block visible-lg-block">
    <div class="container-fluid header">
        <a href="index.php" class="logo-wrapper"></a>
        <div class="menu-wrapper">
            <a href="/index.php" target="_blank">Главная</a>
            <a href="/villa" target="_blank">Виллы</a>
            <a href="/apartment" target="_blank">Апартаменты</a>
            <a href="/feedback" target="_blank">Отзывы</a>
            <a href="/contacts" target="_blank">Контакты</a>          
        </div>
        <div class="phones-wrapper text-right">
            <div>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                <span class="phone-digits digits">+382 67 25 86 66</span>     
                <img class="whatsapp-icon" src="imgs/viber_watsapp_icon.png" height="22" alt="">       
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-default navbar-fixed-top visible-xs-block visible-sm-block">
    <div class="container-fluid header">
        <div class="burger-menu hidden-md hidden-lg"></div>
        <a href="index.php" class="logo-wrapper"></a>
        <div class="phones-wrapper text-right">
            <div>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                <span class="phone-digits">+382 67 25 86 66</span> 
            </div>
        </div>
    </div>
</nav>