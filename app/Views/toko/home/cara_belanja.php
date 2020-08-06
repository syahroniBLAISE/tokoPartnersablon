
				
			<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Cara Belanja</h2>
						<?php
						foreach ($carabelanja as $value) {
							$judul 		= $carabelanja['judul'];	
							$deskripsi 	= $carabelanja['deskripsi'];	
						}
						?>
						<div class="single-blog-post">
							<h3><?php echo $judul;?></h3>
							
							
							
								<?php echo $deskripsi;?>
							

							
							
						</div>
					</div>
					
				</div>	

