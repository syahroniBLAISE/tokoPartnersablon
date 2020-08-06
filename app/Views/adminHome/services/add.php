<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption"><i class="icon-reorder"></i><?= $judul_bar; ?></div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<?php 
				echo form_open_multipart($url_services,'class="form-horizontal"'); ?>

				<div id="form_sample_2" class="form-horizontal">
					<div id="box" class="alert alert-success hide">
						Data Berhasil Diupdate
					</div>
					<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
					
					<div class="control-group">
						<label class="control-label">Judul</label>
						<div class="controls">
							<input type="text" name="nama_services" id="nama_services" class="span6 m-wrap" value="<?php echo $nama_services;?>"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">deskripsi</label>
						<div class="controls">
							<textarea class="span12 wysihtml5 m-wrap" rows="6" name="keterangan" id="keterangan" value="<?php echo $keterangan;?>" ><?php echo $keterangan;?></textarea>
						</div>
					</div>
					<script>
			
					</script>

					

					<div class="control-group">
						<label class="control-label">Gambar</label>
						<div class="controls">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
									<div class="uneditable-input">
										<i class="icon-file fileupload-exists"></i> 
										<span class="fileupload-preview"></span>
									</div>
									<span class="btn btn-file">
										<!-- <span class="fileupload-new">Select file</span>
										<span class="fileupload-exists">Change</span> -->
										<input type="file" id="userfile" name="userfile" value='<?= $gambar;?>' class="default" multiple />
									</span>
									<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
							</div>
						</div>
						<span class="label label-important">NOTE!</span>
						<span>
						File hanya dalam format gif,jpg,png,jpeg dengan resolusi 268PX x 249PX dan ukuran maksimal file sebesar 3 MB
						</span>
					</div>
					
					<div class="form-actions">
						<button type="submit" id="<?= $tombol_services; ?>" class="btn green"><i class="icon-ok"></i> <?= $tombol_services; ?></button>
						<!-- <button type="submit" id="update" class="btn green"><i class="icon-ok"></i>Update</button> -->
						<?php 
						echo form_close(); ?>
						
					</div>
					
				</div>
				
				<!-- END FORM-->
			</div>
		</div>
		<!-- END VALIDATION STATES-->
	</div>
</div>
<div >
	<img style="display: block; margin: auto;" width='200px' src="/images/home/gambarServices/<?= $gambar;   ?>" alt="">
	<br>
	<h3><?= $gambar;   ?></h3>
</div>


<script type="text/javascript">
	
// 	$(document).ready(function(){
		

// 		$("#tambah").click(function(){
// 			var formData = new FormData();
// 			var id = $("#id").val();
// 			var nama_services = $("#nama_services").val();
// 			var keterangan = $("#keterangan").val();
// 			// var userfile = $("#userfile").prop('files');
// 			var userfile = $("#userfile").val()[0];
// 			formData.append('userfile', userfile)
// 			console.log(formData);

// 	            	$.ajax({
// 					type:"POST",
// 					url:"/adminHome/tambahServices/",
// 					data:"id="+id+"&nama_services="+nama_services+"&keterangan="+keterangan+"userfile="+formData,
// 					success:function(data) {
// 						// console.log(data);
// 						if(data == 1){
// 						alert('data berhasil di tambah');
// 						}else{
// 						alert('data gagals di tambah');
// 						}

// 					}
// 				});
            

			
// 		});


// 		// $("#tambah").click(function(){
// 		// 	var formData = new FormData();
// 		// 	var id = $("#id").val();
// 		// 	var nama_services = $("#nama_services").val();
// 		// 	var keterangan = $("#keterangan").val();
// 		// 	var userfile = $("#userfile").val();
// 		// 	formData.append('userfile', userfile)
// 		// 	console.log(formData);

            

			
// 		// });




// $("#update").click(function(){

// 	var id = $("#id").val();
// 	var nama_services = $("#nama_services").val();
// 	var keterangan = $("#keterangan").val();
// 	var userfile = $("#userfile").val();

// 			$.ajax({
// 			type:"POST",
// 			url:"/adminHome/updateServices/",
// 			data:"id="+id+"&nama_services="+nama_services+"&keterangan="+keterangan+"userfile="+userfile,
// 			success:function(data) {
// 						console.log(userfile);
// 				if(data == 1){
// 				alert('data berhasil di update');
// 				}else{
// 				alert('data gagals di update');
// 				}

// 			}
// 		});
	
// 	});

	
// });


</script>