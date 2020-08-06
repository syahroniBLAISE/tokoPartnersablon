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
				// echo form_open_multipart('adminHome/tambahGalery/','class="form-horizontal"'); ?>

				<?php 
				echo form_open_multipart($url,'class="form-horizontal"'); ?>

				<div id="form_sample_2" class="form-horizontal">
					<div id="box" class="alert alert-success hide">
						Data Berhasil Diupdate
					</div>
					<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
					<div class="control-group">
						<label class="control-label">Pertanyaan</label>
						<div class="controls">
							<input type="text" name="pertanyaan" id="pertanyaan" class="span6 m-wrap" value="<?php echo $pertanyaan;?>"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Jawaban</label>
						<div class="controls">
							<input type="text" name="jawaban" id="jawaban" class="span6 m-wrap" value="<?php echo $jawaban;?>"/>
						</div>
					</div>
					
					
					<div class="form-actions">
						<button type="submit" id="<?= $tombol; ?>" class="btn green"><i class="icon-ok"></i> <?= $tombol; ?></button>
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
// 					url:"/adminHome/tambahGalery/",
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
// 			url:"/adminHome/updateGalery/",
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