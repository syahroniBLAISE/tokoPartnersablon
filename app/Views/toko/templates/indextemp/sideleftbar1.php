	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
							<?php foreach ($kategori as $value){ ?>
									<h4 class="panel-title"><a href="/homeToko/kategori/<?php echo $value['id_kategori'];?>"><?php echo $value['nama_kategori'];?></a></h4>
							<?php }; ?>
								</div>
							</div>		
						</div><!--/category-products-->
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
							<?php foreach ($brand as $value){ ?>
								
									<li><a href="/homeToko/brand/<?php echo $value['id_brand'];?>"> <span class="pull-right"></span><?php echo $value['nama_brand'];?></a></li>	
							<?php }; ?>

								</ul>
							</div>
						</div><!--/brands_products-->

						<div class="brands_products"><!--Jasa Pengiriman-->
							<h2>Pengiriman</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
<?php foreach($jasapengiriman as $jasapengiriman): ?>
									<li><a href="www.google.com"> <span class="pull-right"></span>
										<img src="/images/jasapengiriman/<?php echo $jasapengiriman['gambar'];?>">
										</a>
									</li>
<?php endforeach; ?>
								</ul>
							</div>
						</div><!--/Jasa Pengiriman-->
		
					</div>
				</div>
				
				