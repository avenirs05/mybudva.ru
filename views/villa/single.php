<?php include ROOT . '/views/layouts/header.php'; ?>

<?php $villaName = str_replace('_', ' ', $villa['name']); ?>

<h1 class="text-center visible-md-block visible-lg-block"><?php echo $villaName; ?></h1><br>
<h1 class="text-center h1-mob-single visible-xs-block visible-sm-block"><?php echo $villaName; ?></h1>

<div class="container-fluid visible-md-block visible-lg-block">   
    <div class="row"> 	
		<div class="lightgallery-wrap">
			<div id="lightgallery">
				<?php foreach ($imgNameList as $img): ?>
			    	<a href="/upload/images/<?php echo $villa['name']; ?>/<?php echo $img; ?>">        	    <img width="82" height="54" class="img-responsive" src="/upload/images/<?php echo $villa['name']; ?>/<?php echo $img; ?>" alt="">
			    	</a>    	
				<?php endforeach; ?>
			</div>
			<div class="big-img-realty visible-md-block visible-lg-block">    
				<img class="img-responsive" src="/upload/images/<?php echo $villa['name']; ?>/<?php echo $imgNameList[0]; ?>" alt="">
			</div>
		</div>
	</div>
</div>
<br>

<div id="carousel-main-screen" class="carousel slide visible-xs-block visible-sm-block" data-ride="carousel">  
    <!-- Indicators -->
    <ol class="carousel-indicators">
		<?php for ($i = 0; $i < count($imgNameList); $i++): ?>
			<?php if ($i == 0): ?>
				<li data-target="#carousel-main-screen" data-slide-to="0" class="active"></li>
			<?php else: ?>				
				<li data-target="#carousel-main-screen" data-slide-to="<?php echo $i; ?>"></li>
			<?php endif; ?>	   				
		<?php endfor; ?>
	</ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
		<?php for ($i = 0; $i < count($imgNameList); $i++): ?>
			<?php if ($i == 0): ?>
				<div class="item active">
					<img src="/upload/images/<?php echo $villa['name']; ?>/<?php echo $imgNameList[$i]; ?>" alt="">
			<?php else: ?>
				<div class="item">
					<img src="/upload/images/<?php echo $villa['name']; ?>/<?php echo $imgNameList[$i]; ?>" alt="">
			<?php endif; ?>	
   				</div>
		<?php endfor; ?>   	
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

<div class="container-fluid visible-md-block visible-lg-block">   
    <div class="row"> 	
		<div class="params-val-wrap">
			<div id="param-of-realty">
				<div><strong>Площадь</strong></div>
				<div class="param-even"><strong>Вид</strong></div>
				<div><strong>Количество спален</strong></div>
				<div class="param-even"><strong>Вместимость (человек)</strong></div>
				<div><strong>Расстояние до моря</strong></div>
				<div class="param-even"><strong>До аэропорта "Тиват"</strong></div>
				<div><strong>До аэропорта "Подгорица"</strong></div>
				<div class="param-even"><strong>Трансфер</strong></div>
				<div><strong>Интернет</strong></div>
				<div class="param-even"><strong>Паркинг</strong></div>
				<div><strong>Детская кроватка</strong></div>
				<div class="param-even"><strong>Уборка</strong></div><br>
				<div><strong>Описание</strong></div>				
			</div>
			<div id="val-of-realty" class="big-img-realty visible-md-block visible-lg-block">  
				<div><?php echo $villa['area']; ?> м2</div>
				<div class="param-even"><?php echo $villa['view']; ?></div>
				<div><?php echo $villa['bedrooms']; ?></div>
				<div class="param-even"><?php echo $villa['capacity']; ?> человек</div>
				<div><?php echo $villa['dist_sea']; ?> м</div>
				<div class="param-even"><?php echo $villa['dist_tivat']; ?> км</div>
				<div><?php echo $villa['dist_podg']; ?> км</div>
				<div class="param-even">платный</div>
				<div>wi-fi</div>
				<div class="param-even">бесплатный</div>
				<div>под запрос, 5€ в сутки</div>
				<div class="param-even">1 раз в неделю со сменой постельного белья и полотенец</div><br>	
				<div id="fake-dot">.</div>			
			</div>
			<div id="description"><?php echo $villa['description']; ?></div><br>
			<table class="table table-bordered table-prices">
				<tr>
					<th>май</th>
					<th>июнь</th>
					<th>июль</th>
					<th>август</th>
					<th>сентябрь</th>
					<th>октябрь-апрель</th>
				</tr>
				<tr>
					<td><?php echo $villa['price_may']; ?> €</td>
					<td><?php echo $villa['price_jun']; ?> €</td>
					<td><?php echo $villa['price_jul']; ?> €</td>
					<td><?php echo $villa['price_aug']; ?> €</td>
					<td><?php echo $villa['price_sep']; ?> €</td>
					<td><?php echo $villa['price_oct_apr']; ?> €</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<br>

<div class="container-fluid visible-xs-block visible-sm-block">   
    <div class="row"> 	
		<div class="col-xs-12">
			<table class="table-param-mob">
				<tr>
					<th>Площадь</th>
					<td><?php echo $villa['area']; ?> м2</td>
				</tr>
				<tr class="param-even">
					<th>Вид</th>
					<td><?php echo $villa['view']; ?></td>
				</tr>
				<tr>
					<th>Спальни</th>
					<td><?php echo $villa['bedrooms']; ?></td>
				</tr>
				<tr class="param-even">
					<th>Вместимость</th>
					<td><?php echo $villa['capacity']; ?> человек</td>
				</tr>
				<tr>
					<th>До моря</th>
					<td><?php echo $villa['dist_sea']; ?> м</td>
				</tr>
				<tr class="param-even">
					<th>До а/п Тиват</th>
					<td><?php echo $villa['dist_tivat']; ?> км</td>
				</tr>
				<tr>
					<th>До а/п Подгорица</th>
					<td><?php echo $villa['dist_podg']; ?> км</td>
				</tr>
				<tr class="param-even">
					<th>Трансфер</th>
					<td>платный</td>
				</tr>
				<tr>
					<th>Интернет</th>
					<td>wi-fi</td>
				</tr>
				<tr class="param-even">
					<th>Паркинг</th>
					<td>бесплатный</td>
				</tr>
				<tr>
					<th>Детская кроватка</th>
					<td>под запрос, 5€ в сутки</td>
				</tr>
				<tr class="param-even">
					<th>Уборка</th>
					<td>1 раз в неделю со сменой постельного белья и полотенец</td>
				</tr>			
			</table>
			<br>
			<div id="description"><?php echo $villa['description']; ?></div><br>
			<table class="table table-prices-mob">
				<tr class="param-even">
					<th>май</th>
					<th>июнь</th>
					<th>июль</th>
				</tr>
				<tr class="param-even">
					<td><?php echo $villa['price_may']; ?> €</td>
					<td><?php echo $villa['price_jun']; ?> €</td>
					<td><?php echo $villa['price_jul']; ?> €</td>
				</tr>
			</table>
			<table class="table table-prices-mob">
<!-- 				<tr>
					<td colspan="3"></td>
				</tr> -->
				<tr class="param-even">
					<th>август</th>
					<th>сентябрь</th>
					<th>окт-апр</th>
				</tr>

				<tr class="param-even">
					<td><?php echo $villa['price_aug']; ?> €</td>
					<td><?php echo $villa['price_sep']; ?> €</td>
					<td><?php echo $villa['price_oct_apr']; ?> €</td>
				</tr>
			</table>
		</div>
	</div>
</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>
