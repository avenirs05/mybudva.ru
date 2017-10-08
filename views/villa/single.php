<?php include ROOT . '/views/layouts/header.php'; ?>

<?php $villaName = str_replace('_', ' ', $villa['name']); ?>
<h1 class="text-center"><?php echo $villaName; ?></h1><br>

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
<?php //d($villa); ?>

<div class="container-fluid visible-md-block visible-lg-block">   
    <div class="row"> 	
		<div class="params-val-wrap">
			<div id="param-of-realty">
				<div class="param-odd"><strong>Площадь</strong></div>
				<div><strong>Вид</strong></div>
				<div class="param-odd"><strong>Количество спален</strong></div>
				<div><strong>Вместимость (человек)</strong></div>
				<div class="param-odd"><strong>Расстояние до моря</strong></div>
				<div><strong>До аэропорта "Тиват"</strong></div>
				<div class="param-odd"><strong>До аэропорта "Подгорица"</strong></div>
				<div><strong>Трансфер</strong></div>
				<div class="param-odd"><strong>Интернет</strong></div>
				<div><strong>Паркинг</strong></div>
				<div class="param-odd"><strong>Детская кроватка</strong></div>
				<div><strong>Уборка</strong></div><br>
				<div><strong>Описание</strong></div>				
			</div>
			<div id="val-of-realty" class="big-img-realty visible-md-block visible-lg-block">  
				<div class="param-odd"><?php echo $villa['area']; ?> м2</div>
				<div><?php echo $villa['view']; ?></div>
				<div class="param-odd"><?php echo $villa['bedrooms']; ?></div>
				<div><?php echo $villa['capacity']; ?> человек</div>
				<div class="param-odd"><?php echo $villa['dist_sea']; ?> м</div>
				<div><?php echo $villa['dist_tivat']; ?> км</div>
				<div class="param-odd"><?php echo $villa['dist_podg']; ?> км</div>
				<div>платный</div>
				<div class="param-odd">wi-fi</div>
				<div>бесплатный</div>
				<div class="param-odd">под запрос, 5€ в сутки</div>
				<div>1 раз в неделю со сменой постельного белья и полотенец</div><br>	
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

<?php include ROOT . '/views/layouts/footer.php'; ?>
