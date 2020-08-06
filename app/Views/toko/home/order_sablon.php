<!-- awal halaman order -->



	<div id="contact-page" class="container">
    	<div class="bg">  	
    		<div class="row">  	
    			
<!-- awal div order -->
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">ORDER</h2>
	    				<?php 
									
							// if ($this->session->flashdata('sukses')){
							// 	echo "<div class='alert alert-block alert-success show'>
							// 		  	<button type='button' class='close' data-dismiss='alert'>×</button>
							// 			<span>Pesan Berhasil Dikirim</span>
							// 		</div>";
						// }
						 ?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="/homeToko/hubungi_kami_kirim">

				    		<div class="form-group col-md-12">

								<label class="control-label">WARNA</label>
								<select id="select2_sample1" name="brand_id" class="span6 select2">
									<?php foreach ($warna as $warna) { ?>
									<option value="<?php echo $warna['warna'];?>"><?php echo $warna['warna'];?>			
									</option>
									<?php	} ?>
								</select>
								
							</div>

							<div class="form-group col-md-12">

								<label class="control-label">SIZE</label>
								<select id="select2_sample1" name="brand_id" class="span6 select2">
									<?php foreach ($size as $size) { ?>
									<option value="<?php echo $size['size'];?>"><?php echo $size['size'];?>			
									</option>
									<?php	} ?>
								</select>
								
							</div>

							<div class="form-group col-md-12">

								<label class="control-label">LENGAN</label>
								<select id="select2_sample1" name="brand_id" class="span6 select2">
									<?php foreach ($lengan as $lengan) { ?>
									<option value="<?php echo $lengan['lengan'];?>"><?php echo $lengan['lengan'];?>			
									</option>
									<?php	} ?>
								</select>
								
							</div>

							<div class="form-group col-md-12">

								<label class="control-label">KETEBALAN</label>
								<select id="select2_sample1" name="brand_id" class="span6 select2">
									<?php foreach ($ketebalan as $ketebalan) { ?>
									<option value="<?php echo $ketebalan['ketebalan'];?>"><?php echo $ketebalan['ketebalan'];?>			
									</option>
									<?php	} ?>
								</select>
								
							</div>

							<div class="form-group col-md-12">

								<label class="control-label">BRAND KAOS</label>
								<select id="select2_sample1" name="brand_id" class="span6 select2">
									<?php foreach ($brandkaos as $brandkaos) { ?>
									<option value="<?php echo $brandkaos['brandkaos'];?>"><?php echo $brandkaos['brandkaos'];?>			
									</option>
									<?php	} ?>
								</select>
								
							</div>


<!-- kirim gambar awal -->

							<div class="form-group col-md-12">
								<label class="control-label">UPLOAD GAMBAR</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="input-append">
										<div class="uneditable-input">
											<i class="icon-file fileupload-exists"></i> 
											<span class="fileupload-preview"></span>
										</div>
											<span class="btn btn-file">
											<!-- <span class="fileupload-new">Select file</span>
											<span class="fileupload-exists">Change</span> -->
											<input type="file" name="userfile" class="default" />
											</span>
									</div>
								</div>
									<span class="label label-important">NOTE!</span>
									<span>
									File hanya dalam format gif,jpg,png,jpeg dengan resolusi 268PX x 249PX dan ukuran maksimal file sebesar 3 MB
									</span>
							</div>
				            
							
							
<!-- kirim gambar akhir -->

							<div class="form-group col-md-12">
								<div><label class="control-label">Data Pembeli</label></div>

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
				            </div>

	
				            <div class="form-group col-md-12">
				                <textarea name="pesan" id="message" required="required" class="form-control" rows="8" placeholder="Ketikkan Pesan Anda Disini"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="ORDER">
				            </div>
				        </form>
	    			</div>
	    		</div>

<!-- akhir div order --> 


<!-- awal div contak --> 


	    		<div class="col-sm-4">
	    			<div class="contact-info">
    				<h2 class="title text-center">Kontak Kami</h2>
					    	<?php
								foreach ($owner as $owner) {
								$nama 	= $owner['nama'];
								$notelp = $owner['notelp'];
								$email 	= $owner['email'];
								$fb 	= $owner['fb'];
								$ig 	= $owner['ig'];
							}
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

<!-- akhir div contak --> 

	    	</div>  
    	</div>	
    </div><!--/#contact-page-->


<!-- akhir halaman order -->



	
	





	