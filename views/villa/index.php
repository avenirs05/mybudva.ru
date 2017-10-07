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
            <div class="col-md-4">
                <a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank">
                    <img src="/upload/images/<?php echo $villaItem['name']; ?>/<?php echo $firstImgName[0]; ?>" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-md-8">                
                <h3><a href="/villa/single/<?php echo $villaItem['name']; ?>/<?php echo $villaItem['id']; ?>.php" target="_blank"><?php echo $villaName; ?></a></h3>
                <h4><?php echo $villaItem['mini_descr']; ?></h4>
                <ul>
                    <li><span class="bold">Площадь: </span><?php echo $villaItem['area']; ?> м2</li>
                    <li><span class="bold">Расстояние до моря:</span> <?php echo $villaItem['dist_sea']; ?> м</li>
                </ul>
            </div>
            <div class="price-and-btn">
                <div class="text-right line-through line-through-parent">
                    <span class="line-through-child">€ <?php echo $villaItem['price_through']; ?></span>
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

<?php include ROOT . '/views/layouts/footer.php'; ?>