<?php include ROOT . '/views/layouts/header.php'; ?>

<h1 class="text-center"><?php echo $villa['name']; ?></h1>
<div class="container-fluid visible-md-block visible-lg-block">   
    <div class="row">    	
        <div class="col-md-12">       
			<div class="container-fluid gallery visible-md-block visible-lg-block">
			    <div class="row">
			        <div class="col-md-6 text-center">
			        	<div id="lightgallery">
			        		<?php foreach ($imgNameList as $img): ?>
					        	<a href="/upload/images/<?php echo $villa['name']; ?>/<?php echo $img; ?>"					        	    
					        	</a>
					        	<img class="img-responsive" src="/upload/images/<?php echo $villa['name']; ?>/<?php echo $img; ?>" alt="">
					        	<!-- <div class="img-layout"></div> -->
				        	<?php endforeach; ?>
				        </div>
				    </div>
	            </div>
	        </div>			
		</div>
	</div>
</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>