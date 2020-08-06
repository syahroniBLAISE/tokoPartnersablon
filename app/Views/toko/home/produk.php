
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							
							<?php

							foreach ($kategori->result_array() as $value) {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url();?>home/kategori/<?php echo $value['id_kategori'];?>"><?php echo $value['nama_kategori'];?></a></h4>
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
									foreach ($brand->result_array() as $value) { ?>
									<li><a href="<?php echo base_url();?>home/brand/<?php echo $value['id_brand'];?>"> <span class="pull-right"></span><?php echo $value['nama_brand'];?></a></li>
									
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
									foreach ($jasapengiriman->result_array() as $value) { ?>
									<li><a href=""> <span class="pull-right"></span>
										<img src="<?php echo base_url();?>images/jasapengiriman/<?php echo $value['gambar'];?>">
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
				<?php

						foreach ($data_produk->result_array() as $value) {
							$id_produk 		= $value['id_produk'];
							$kode_produk 	= $value['kode_produk'];
							$nama_produk 	= $value['nama_produk'];
							$harga 			= $value['harga'];
							$stok 			= $value['stok'];
							$deskripsi 		= $value['deskripsi'];
							$gambar 		= $value['gambar'];
							$nama_kategori 	= $value['nama_kategori'];
							$nama_brand 	= $value['nama_brand'];
						}

						?>

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
								<img src="<?php echo base_url();?>images/produk/<?php echo $gambar;?>" alt="" />
								
							</div>
							</div>
							</div>
							

						</div>
						
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2><?php echo $nama_produk;?></h2>
								<p>Kode Produk: <?php echo $kode_produk;?></p>
								
								<span>
									<span><?php echo $harga;?></span>
									<label>Quantity: <?php echo $stok;?></label>
									
									<a href="<?php echo base_url();?>home/keranjang/<?php echo $id_produk;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													
								</span>
								<p><b>Category:</b> <?php echo $nama_kategori;?></p>
								<p><b>Brand:</b> <?php echo $nama_brand;?></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php
									foreach ($random_active->result_array() as $value) { ?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>images/produk/<?php echo $value['gambar'];?>" alt="" />
														<h2><?php echo $value['harga'];?></h2>
														<p><?php echo $value['kode_produk'];?></p>
														<a href="<?php echo base_url();?>home/produk/<?php echo $value['id_produk'];?>"><p> <?php echo $value['nama_produk'];?></p></a>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
									</div>
									<?php
									}
									?>
									
									
								</div>
								<div class="item">	
									<?php
									foreach ($random->result_array() as $value) { ?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>images/produk/<?php echo $value['gambar'];?>" alt="" />
														<h2><?php echo $value['harga'];?></h2>
														<p><?php echo $value['kode_produk'];?></p>
														<a href="<?php echo base_url();?>home/produk/<?php echo $value['id_produk'];?>"><p> <?php echo $value['nama_produk'];?></p></a>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													
												</div>
											</div>
										</div>
									</div>
									<?php
									}
									?>
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
				
				
			</div>
		</div>
	</section>
