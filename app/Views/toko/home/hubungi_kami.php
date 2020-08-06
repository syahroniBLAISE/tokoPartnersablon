
	<div id="contact-page" class="container">
    	<div class="bg">
	    	  	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Kirim Email</h2>
	    				<?php 
									
							if (session()->getflashdata('sukses')){
								echo "<div class='alert alert-block alert-success show'>
									  	<button type='button' class='close' data-dismiss='alert'>×</button>
										<span>Pesan Berhasil Dikirim</span>
									</div>";
							}
								 				
							?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="/hometoko/hubungi_kami_kirim">
				            <div class="form-group col-md-6">
				                <input type="text" name="nama" class="form-control" required="required" placeholder="Nama">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="hp" class="form-control" required="required" placeholder="Hp">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="alamat" class="form-control" required="required" placeholder="Alamat">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="pesan" id="message" required="required" class="form-control" rows="8" placeholder="Ketikkan Pesan Anda Disini"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Kontak Kami</h2>
								<?php
								// var_dump($owner);
								// var_dump($owner['nama']);
								// die;
								// 	while($owner) {
									$nama 	= $owner['nama'];
									$notelp = $owner['notelp'];
									$email 	= $owner['email'];
									$fb 	= $owner['fb'];
									$ig 	= $owner['ig'];
								// }
								?>
	    				<address>
	    				
	    					<p><span ><?php echo $nama;?></span> 
	    						<br><br>
	    						<a href="">Partner Sablon</a></p>
	    					<br>
							<p>Mobile: <?php echo $notelp;?></p>
							<p>Email: <?php echo $email;?></p>
							
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosial Media</h2>
							<ul>
								<li>
									<a href="<?php echo $fb ;?>"><i class="fa fa-facebook"> <?php echo $fb ;?></i></a>
								</li>
								<li>
									<a href="<?php echo $ig ;?>"><i class="fa fa-instagram"> <?php echo $ig ;?></i></a>
								</li>

							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	
	