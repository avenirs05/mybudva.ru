<?php //print_r($_GET); ?>
<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container-fluid visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Виллы</h1>
            <hr>
        </div>
    </div> 
    <?php foreach ($villas as $villaItem): ?>
        <?php $firstImgName = Realty::getImgNameList($villaItem); ?>        
        <?php $villaName = str_replace('_', ' ', $villaItem['name']); ?>
        <div class="row item-strip">
            <?php if ($villaItem['booking'] !== 'нет'): ?> 
            <div class="booking-wrap">                               
                <div class="rating text-center"><?php echo $villaItem['booking']; ?></div>
                <img class="img-responsive" src="/imgs/booking-logo.jpg" alt="">
            </div>   
            <?php endif; ?>     
            <div class="col-md-4">
                <a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank">
                    <img src="/upload/images/<?php echo $villaItem['name']; ?>/<?php echo $firstImgName[0]; ?>" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-md-8 descr-text-wrap">                
                <h3><a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank"><?php echo $villaName; ?></a></h3>
                <h4 class="header-mini-descr"><?php echo $villaItem['mini_descr']; ?></h4>
                <ul>
                    <li><span class="bold">Площадь: </span><?php echo $villaItem['area']; ?> м2</li>
                    <li><span class="bold">Расстояние до моря:</span> <?php echo $villaItem['dist_sea']; ?> м</li>
                    <li><span class="bold">Количество спален:</span> <?php echo $villaItem['bedrooms']; ?></li>
                    <li><span class="bold">Вместимость:</span> <?php echo $villaItem['capacity']; ?> человек</li>
                </ul>
            </div>
            <div class="price-and-btn">
                <div class="text-right line-through line-through-parent">
                    <?php if ( !(empty($villaItem['price_through'])) ): ?> 
                        <span id="from" style="color: black; text-decoration: none;">от</span>
                        <span class="line-through-child"> 
                            € <?php echo $villaItem['price_through']; ?>                  
                        </span> 
                    <?php endif; ?>                       
                </div>
                <div class="text-right">
                    <span>€ <?php echo $villaItem['price']; ?></span>
                </div>
                <a class="text-right" href="#">
                    <a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank"><button>Подробнее</button></a>
                </a>
            </div>
        </div> 
        <hr>
    <?php endforeach; ?>    
</div>

<div class="container-fluid visible-xs-block visible-sm-block single-realty-mob">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center h1-mob">Виллы</h1>
            <hr>
        </div>
    </div> 
    <?php foreach ($villas as $villaItem): ?>
        <?php $firstImgName = Realty::getImgNameList($villaItem); ?>        
        <?php $villaName = str_replace('_', ' ', $villaItem['name']); ?>
        <div class="row item-strip">        
            <div class="col-xs-4">
                <a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank">
                    <img src="/upload/images/<?php echo $villaItem['name']; ?>/<?php echo $firstImgName[0]; ?>" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-8">                
                <h3><a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank"><?php echo $villaName; ?></a></h3>
                <!-- <h4><?php echo $villaItem['mini_descr']; ?></h4> -->
                <ul>
                    <li><span class="bold">Площадь: </span><?php echo $villaItem['area']; ?> м2</li>
                    <li><span class="bold">До моря:</span> <?php echo $villaItem['dist_sea']; ?> м</li>
                </ul>
            </div>
            <div id="prices-mob" class="price-and-btn">
                <div class="text-right line-through line-through-parent">
                    <?php if ( !(empty($villaItem['price_through'])) ): ?>
                        <span id="price-through-mob" class="line-through-child">€ <?php echo $villaItem['price_through']; ?></span>
                    <?php endif; ?> 
                </div>
                <div class="text-right">
                    <span id="price-mob">€ <?php echo $villaItem['price']; ?></span>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-xs-12">
                <a class="text-right" href="#">
                    <a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank">
                        <button>Подробнее</button>
                    </a>
                </a>
            </div>
        </div>
        <hr>
    <?php endforeach; ?>    
</div>
<br>

<!-- test -->

<?php include ROOT . '/views/layouts/footer.php'; ?>