<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Features Producs</h2>
					<?php 
					// dd($produk_kategori);
					?>
					<h2><?php echo $nama_kategori['nama_kategori'];?></h2>
					<?php if (count($produk_kategori)>0) {
						foreach ($produk_kategori as $value) { 
						$no;
						?>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo base_url();?>images/produk/<?php echo $value['gambar'];?>" alt="" />
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
										<a href="/HomeToko/keranjang/<?php echo $value['id_produk'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php }}
					else {echo "Tidak Ada Products";}?>			
					
				</div><!--features_items-->
					<?php echo $pager->links(); ?>
			</div>
		</div>
	</div>
</section>
	
