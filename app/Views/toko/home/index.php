<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Features Producs</h2>
				<?php foreach($produk as $produk): ?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
						<div class="productinfo text-center">
							<img src="/images/produk/<?php echo $produk['gambar'];?>" alt="" />
							<h2><?php echo $produk['harga'];?></h2>
							<p><?php echo $produk['kode_produk'];?></p>
							<a href="/home/produk/<?php echo $produk['id_produk'];?>"><p> <?php echo $produk['nama_produk'];?></p></a>
							<a href="/HomeToko/keranjang/<?php echo $produk['id_produk'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>s
						<div class="product-overlay">
							<div class="overlay-content">
								<h2><?php echo $produk['harga'];?></h2>
								<p><?php echo $produk['kode_produk'];?></p>
								<a href="/home/produk/<?php echo $produk['id_produk'];?>"><p> <?php echo $produk['nama_produk'];?></p></a>
								<a href="/HomeToko/keranjang/<?php echo $produk['id_produk'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
				</div>
			</div>
		</div>
				<?php endforeach; ?>
	
	</div><!--features_items-->
	
	
	
	<div class="recommended_items"><!--recommended_items-->
		<h2 class="title text-center">recommended items</h2>
		
		<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				
						
						<div class="item active">	
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="/images/produk/<?php echo $random_active['gambar'];?>" alt="" />
										<h2><?php echo $random_active['harga'];?></h2>
										<p><?php echo $random_active['kode_produk'];?></p>
										<a href="/home/produk/<?php echo $random_active['id_produk'];?>"><p> <?php echo $random_active['nama_produk'];?></p></a>
										<a href="/HomeToko/keranjang/<?php echo $random_active['id_produk'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					

					
					<div class="item">	
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="/images/produk/<?php echo $random['gambar'];?>" alt="" />
										<h2><?php echo $random['harga'];?></h2>
										<p><?php echo $random['kode_produk'];?></p>
										<a href="/home/produk/<?php echo $random['id_produk'];?>"><p> <?php echo $random['nama_produk'];?></p></a>
										<a href="/HomeToko/keranjang/<?php echo $random['id_produk'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
							</div>
						</div>

					</div>
	
				
			</div>
				<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
				</a>
				<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
				</a>			
		</div>
	</div><!--/recommended_items-->
</div>
	