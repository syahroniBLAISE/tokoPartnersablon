
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							
							<?php

							foreach ($kategori as $value) {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="/home/kategori/<?php echo $value['id_kategori'];?>"><?php echo $value['nama_kategori'];?></a></h4>
								</div>
							</div>		
							<?php
							}
							?>	
						
							

						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php
									foreach ($brand as $value) { ?>
									<li><a href="/home/brand/<?php echo $value['id_brand'];?>"> <span class="pull-right"></span><?php echo $value['nama_brand'];?></a></li>
									
									<?php
									}
									?>
									
									
								</ul>
							</div>
						</div><!--/brands_products-->
					</br>

						<div class="brands_products"><!--Jasa Pengiriman-->
							<h2>Pengiriman</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php
									foreach ($jasapengiriman as $value) { ?>
									<li><a href=""> <span class="pull-right"></span>
										<img src="/images/jasapengiriman/<?php echo $value['gambar'];?>">
										</a>
									</li>
									
									<?php
									}
									?>
									
									
								</ul>
							</div>
						</div><!--/Jasa Pengiriman-->
						
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Producs</h2>
						<h2>Hasil Pencarian</h2>
						
						<?php
						if (count($produk_cari)>0) {

							foreach ($produk_cari as $value) { 
							$no;
							?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="/images/produk/<?php echo $value['gambar'];?>" alt="" />
											<h2><?php echo $value['harga'];?></h2>
											<p><?php echo $value['kode_produk'];?></p>
											<p><?php echo $value['nama_produk'];?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $value['harga'];?></h2>
												<p><?php echo $value['kode_produk'];?></p>
												<p><?php echo $value['nama_produk'];?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<?php
						
	 					
						}
						

						}
						else {
							echo "Tidak Ada Products";
						}
						?>
						

						
						
						
						
						
						
						
					</div><!--features_items-->
					
					
						
							
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	