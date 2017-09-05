<?php 
    require_once 'functions.php';     
    getHeadScripts('Аренда вилл и апартаментов в Черногории');     
    require_once 'modals.php';
    require_once 'header.php'; 
?> 

<div id="carousel-main-screen" class="carousel slide" data-ride="carousel">    
    <h1 class="text-center">Аренда Вилл и Апартаментов на побережье Адриатического моря Черногории</h1>
  <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-main-screen" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-main-screen" data-slide-to="1"></li>
        <li data-target="#carousel-main-screen" data-slide-to="2"></li>
        <li data-target="#carousel-main-screen" data-slide-to="3"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="imgs/slider-01.jpg" alt="">
        </div>
        <div class="item">
            <img src="imgs/slider-02.jpg" alt="">
        </div>
        <div class="item">
            <img src="imgs/slider-03.jpg" alt="">
        </div>    
        <div class="item">
            <img src="imgs/slider-04.jpg" alt="">
        </div>            
    </div>
  <!-- Controls -->
    <a class="left carousel-control" href="#carousel-main-screen" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-main-screen" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid hot-offers visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center bold">Горячие предложения</h2>
            <h3>Виллы</h3>
            <hr>
        </div>
    </div> 
    <div class="row item-strip">        
        <div class="col-md-4">
            <img src="imgs/narcissus_01-min540x360.jpg" alt="" class="img-responsive">
        </div>
        <div class="col-md-8">
            <h3><a href="#" target="_blank">Вилла Rafailovici 1</a></h3>
            <h4>Вилла на первой линии от моря</h4>
            <ul>
                <li><span class="bold">Площадь:</span> 61 кв.м</li>
                <li><span class="bold">Расстояние до моря:</span> 20 м</li>
            </ul>
        </div>
        <div class="price-and-btn">
            <div class="text-right line-through line-through-parent">
                <span class="line-through-child">от € 300</span>
            </div>
            <div class="text-right">
                <span>€ 300</span>
            </div>
            <a class="text-right" href="#">
                <a href="/villas.php" target="_blank"><button>Подробнее</button></a>
            </a>
        </div>
    </div> 
    <hr>
</div>

<?php require_once 'footer.php'; ?>