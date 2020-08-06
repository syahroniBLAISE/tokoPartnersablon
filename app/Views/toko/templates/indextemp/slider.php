<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<?php
							// var_dump($slider);
							// die;

						$t = $terakhir['terakhir'];
						foreach ($slider as $slider){
						// 	var_dump($slider['id_slider']);
						// }
						if ($slider['id_slider']==$t) { ?>
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>Syahroni</span>- Partner Sablon</h1>
								<h2><?= $slider['tittle'];?></h2>
								<p><?= strip_tags(substr($slider['description'],0,200));?></p>
								<a href="/home/detail_slider/<?= $slider['id_slider'];?>" class="btn btn-default get"> Read More</a>
							</div>
							<div class="col-sm-6">
								<img src="/images/slider/<?= $slider['gambar'];?>" class="girl img-responsive" alt="<?= $slider['tittle'];?>" />	
							</div>
						</div>
						<?php }else { ?>

						<div class="item">
							<div class="col-sm-6">
								<h1><span>Syahroni</span>- Partner Sablon</h1>
								<h2><?= $slider['tittle'];?></h2>
								<p><?= strip_tags(substr($slider['description'],0,200));?></p>
								<a href="/home/detail_slider/<?= $slider['id_slider'];?>" class="btn btn-default get"> Read More</a>
							</div>
							<div class="col-sm-6">
							<img src="/images/slider/<?= $slider['gambar'];?>" class="girl img-responsive" alt="<?= $slider['tittle'];?>" />
							
							</div>
						</div>
						<?php } ?>
						<?php } ?>
						

					</div>
					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>

				</div>
			</div>
		</div>
	</div>
</section><!--/slider-->