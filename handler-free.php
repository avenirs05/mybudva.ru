<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
    
    <title>Спасибо за обращение!</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="css/lightGallery.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightgallery.min.js"></script>
    <script src="js/lg-thumbnail.min.js"></script>

    <script>
        $(function () {
            // $('#carousel-main-screen').carousel();
            // $('#carousel-gallery-mob').carousel();
            // $("#lightgallery").lightGallery({
            //     showThumbByDefault: true
            // });
        });
    </script>

    <style>
        body {
          background-color: #fff;
        }
    </style>
</head>

<body>
<?php require_once 'header.php'; ?>

<div class="container-fluid questions-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="thank-you text-center">
                <span>Спасибо за обращение! С вами свяжутся в ближайшее время!</span><br>
                <span>Вернуться на <a href="index.php">Главную.</a></span>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>

<?php 
require_once 'functions.php';
// print_r($_POST);

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'info@veter61.ru';
$subject = "Заявка с сайта veter61.ru";

if (isset($_GET['submit-free-consult'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: заявка с сайта veter61.ru</strong><br>' .
                        'Имя: ' . $_GET['customer-name'] . '<br>' .
                        'Телефон: ' . $_GET['customer-phone'] . '<br></body></html>';    

    mail($to, $subject, $message, $headers);
    exit();
}

?>


