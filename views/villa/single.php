<?php include ROOT . '/views/layouts/header.php'; ?>

<h1 class="text-center"><?php echo $villa['name']; ?></h1><br>

<div class="container-fluid visible-md-block visible-lg-block">   
    <div class="row">    	
        <div class="col-md-6 visible-md-block visible-lg-block">    
			<div id="lightgallery">
				<?php foreach ($imgNameList as $img): ?>
			    	<a href="/upload/images/<?php echo $villa['name']; ?>/<?php echo $img; ?>">        	    <img class="img-responsive" src="/upload/images/<?php echo $villa['name']; ?>/<?php echo $img; ?>" alt="">
			    	</a>    	
				<?php endforeach; ?>
			</div>	
		</div>
        <div class="col-md-6 big-img-realty visible-md-block visible-lg-block">    
			<img class="img-responsive" src="/upload/images/<?php echo $villa['name']; ?>/<?php echo $imgNameList[0]; ?>" alt="">
		</div>
	</div>
</div>
<br>
<div class="container-fluid visible-md-block visible-lg-block">   
    <div class="row">    	
        <div class="col-md-12 visible-md-block visible-lg-block">    
			<table class="table-striped table-parameters">
				<tr>
				  <td class="active">Параметр</td>
				  <td class="success">Значение</td>
				</tr>
				<tr>
				  <td class="active">Параметр</td>
				  <td class="success">Значение</td>
				</tr>
				<tr>
				  <td class="active">Параметр</td>
				  <td class="success">Значение</td>
				</tr>
			</table>							
		</div>
	</div>
</div>



<!-- <?php include ROOT . '/views/layouts/footer.php'; ?> -->