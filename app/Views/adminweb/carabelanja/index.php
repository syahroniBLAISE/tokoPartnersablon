<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Setting Cara Belanja</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								
								<div id="form_sample_2" class="form-horizontal">
								<div id="box" class="alert alert-success hide">
										Data Berhasil Diupdate
									</div>
									<input type="hidden" name="id_carabelanja" id="id_carabelanja" value="<?php echo $id_carabelanja;?>">
									<div class="control-group">
										<label class="control-label">Judul</label>
										<div class="controls">
											<input type="text" name="judul" id="judul" class="span6 m-wrap" value="<?php echo $judul;?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">deskripsi</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6" name="deskripsi" id="deskripsi" value="<?php echo $deskripsi;?>" ><?php echo $deskripsi;?></textarea>
											
										</div>
									</div>

									
									<div class="form-actions">
										<button type="submit" id="update" class="btn green"><i class="icon-ok"></i> Update</button>
										
									</div>
								</div>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>


<script type="text/javascript">
	
	$(document).ready(function(){

		$("#update").click(function(){

			var id_carabelanja = $("#id_carabelanja").val();
			var judul = $("#judul").val();
			var deskripsi = $("#deskripsi").val();

	            	$.ajax({
					type:"POST",
					url:"/adminToko/carabelanja_simpan",
					data:"id_carabelanja="+id_carabelanja+"&judul="+judul+"&deskripsi="+deskripsi,
					success:function(data) {
						// $("#box").show();
					alert('data berhasil di upload');
						

					}
				});
            

			
		});

	});
</script>